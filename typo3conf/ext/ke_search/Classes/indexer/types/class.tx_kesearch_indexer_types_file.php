<?php
/* * *************************************************************
 *  Copyright notice
 *
 *  (c) 2011 Stefan Froemken
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 * ************************************************************* */

use \TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * Plugin 'Faceted search' for the 'ke_search' extension.
 * @author    Stefan Froemken
 * @author    Christian Bülter
 * @package    TYPO3
 * @subpackage    tx_kesearch
 */
class tx_kesearch_indexer_types_file extends tx_kesearch_indexer_types
{

    public $extConf = array(); // saves the configuration of extension ke_search_hooks
    public $app = array(); // saves the path to the executables
    public $isAppArraySet = false;

    /**
     * @var tx_kesearch_lib_fileinfo
     */
    public $fileInfo;

    /**
     * @var TYPO3\CMS\Core\Resource\ResourceStorage
     */
    public $storage;

    /**
     * Initializes indexer for files
     */
    public function __construct($pObj)
    {
        parent::__construct($pObj);

        // get extension configuration of ke_search
        $this->extConf = tx_kesearch_helper::getExtConf();
        $this->fileInfo = GeneralUtility::makeInstance('tx_kesearch_lib_fileinfo');
    }

    /**
     * This function was called from indexer object and saves content to index table
     * @return string content which will be displayed in backend
     */
    public function startIndexing()
    {
        $directories = $this->indexerConfig['directories'];
        $directoryArray = GeneralUtility::trimExplode(',', $directories, true);

        if ($this->pObj->indexerConfig['fal_storage'] > 0) {
            /* @var $storageRepository TYPO3\CMS\Core\Resource\StorageRepository */
            $storageRepository = GeneralUtility::makeInstance(
                'TYPO3\\CMS\\Core\\Resource\\StorageRepository'
            );

            $this->storage = $storageRepository->findByUid($this->pObj->indexerConfig['fal_storage']);

            $files = array();
            $this->getFilesFromFal($files, $directoryArray);
        } else {
            $files = $this->getFilesFromDirectories($directoryArray);
        }

        $counter = $this->extractContentAndSaveToIndex($files);

        // show indexer content?
        $content = '<p><b>Indexer "' . $this->indexerConfig['title'] . '": </b><br />'
            . count($files) . ' files have been found for indexing.<br />' . "\n"
            . $counter . ' files have been indexed.</p>' . "\n";

        $content .= $this->showErrors();
        $content .= $this->showTime();

        return $content;
    }

    /**
     * fetches files recurively using FAL
     * @param array $files
     * @param array $directoryArray
     */
    public function getFilesFromFal(&$files, $directoryArray)
    {

        foreach ($directoryArray as $directory) {
            $folder = $this->storage->getFolder($directory);

            if ($folder->getName() != '_temp_') {
                $filesInFolder = $folder->getFiles();
                if (count($filesInFolder)) {
                    foreach ($filesInFolder as $file) {
                        if (GeneralUtility::inList($this->pObj->indexerConfig['fileext'], $file->getExtension())) {
                            $files[] = $file;
                        }
                    }
                }

                // do recursion
                $subfolders = $folder->getSubFolders();
                if (count($subfolders)) {
                    foreach ($subfolders as $subfolder) {
                        $this->getFilesFromFal($files, array($subfolder->getIdentifier()));
                    }
                }
            }
        }
    }

    /**
     * get files from given relative directory path array
     * @param array $directoryArray
     * @return array An Array containing all files of all valid directories
     */
    public function getFilesFromDirectories(array $directoryArray)
    {
        $directoryArray = $this->getAbsoluteDirectoryPath($directoryArray);
        if (is_array($directoryArray) && count($directoryArray)) {
            $files = array();
            foreach ($directoryArray as $directory) {
                $foundFiles = GeneralUtility::getAllFilesAndFoldersInPath(
                    array(),
                    $directory,
                    $this->indexerConfig['fileext']
                );

                if (is_array($foundFiles) && count($foundFiles)) {
                    foreach ($foundFiles as $file) {
                        $files[] = $file;
                    }
                }
            }
            return $files;
        } else {
            return array();
        }
    }

    /**
     * get absolute directory paths of given path in array
     * @param array $directoryArray
     * @return array An Array containing the absolute directory paths
     */
    public function getAbsoluteDirectoryPath(array $directoryArray)
    {
        if (is_array($directoryArray) && count($directoryArray)) {
            foreach ($directoryArray as $key => $directory) {
                $directory = rtrim($directory, '/');
                $directoryArray[$key] = PATH_site . $directory . '/';
            }
            return $directoryArray;
        } else {
            return array();
        }
    }

    /**
     * loops through an array of files an stores their content
     * to the index.
     * returns number of files indexed.
     * @param array $files
     * @return integer
     */
    public function extractContentAndSaveToIndex($files)
    {
        $counter = 0;
        if (is_array($files) && count($files)) {
            foreach ($files as $file) {
                if ($this->fileInfo->setFile($file)) {
                    // get file content, check if we have a FAL resource or a simple
                    // string containing the path to the file
                    if ($file instanceof \TYPO3\CMS\Core\Resource\File) {
                        $content = $this->getFileContent($file->getForLocalProcessing(false));
                    } else {
                        $content = $this->getFileContent($file);
                    }

                    if (!($content === false)) {
                        $this->storeToIndex($file, $content);
                        $counter++;
                    }
                }
            }
        }

        return $counter;
    }

    /**
     * get filecontent of allowed extensions
     * @param string $file
     * @return mixed false or fileinformations as array
     */
    public function getFileContent($file)
    {
        // we can continue only when given file is really file and not a directory
        if ($this->fileInfo->getIsFile()) {
            $className = 'tx_kesearch_indexer_filetypes_' . $this->fileInfo->getExtension();

            // check if class exists
            if (class_exists($className)) {
                // make instance
                $fileObj = GeneralUtility::makeInstance($className);

                // check if new object has interface implemented
                if ($fileObj instanceof tx_kesearch_indexer_filetypes) {
                    // Do the check if a file has already been indexed at this early point in order
                    // to skip the time expensive "get content" process which includes calls to external tools
                    // fetch the file content directly from the index
                    $fileContent = $this->getFileContentFromIndex($this->getUniqueHashForFile());

                    // if there's no matching index entry, we execute the  "get file content" method of our new object
                    if (!$fileContent) {
                        $fileContent = $fileObj->getContent($file);
                        $this->addError($fileObj->getErrors());
                    }

                    // remove line breaks from content in order to identify
                    // additional content (which will have trailing linebreaks)
                    $fileContent = str_replace("\n", ' ', $fileContent);

                    return $fileContent;
                } else {
                    return false;
                }
            } else {
                // if no indexer for this type of file exists, we do a fallback:
                // we return an empty content. Doing this at least the FAL metadata
                // can be indexed. So this makes only sense when using FAL.
                if ($this->pObj->indexerConfig['fal_storage'] > 0) {
                    return '';
                } else {
                    $this->addError('No indexer for this type of file. (class ' . $className . ' does not exist).');
                    return false;
                }
            }
        } else {
            $this->addError($file . ' is not a file.');
            return false;
        }
    }

    /**
     * checks if there's an entry in the index for the given file hash. Returns the content of that entry.
     * @param string $hash
     * @return string/boolean returns false if no entry has been found, otherwise the content as string
     */
    public function getFileContentFromIndex($hash = "")
    {
        $fileContent = false;
        $res = $GLOBALS['TYPO3_DB']->sql_query('SELECT * FROM tx_kesearch_index WHERE hash = "' . $hash . '" LIMIT 1');
        if ($GLOBALS['TYPO3_DB']->sql_num_rows($res)) {
            if ($indexRow = $GLOBALS['TYPO3_DB']->sql_fetch_assoc($res)) {
                $fileContent = $indexRow['content'];
            }
        }
        return $fileContent;
    }

    /**
     * get a unique hash for current file
     * this is needed for a faster check if record allready exists in indexer table
     * @return string A 25 digit MD5 hash value of current file and last modification time
     */
    public function getUniqueHashForFile()
    {
        $path = $this->fileInfo->getPath();
        $file = $this->fileInfo->getName();
        $mtime = $this->fileInfo->getModificationTime();

        return md5($path . $file . '-' . $mtime);
    }

    /**
     * creates a index entry for a given file
     * @param string $file
     * @param string $content
     */
    public function storeToIndex($file, $content)
    {
        $tags = '';
        tx_kesearch_helper::makeTags($tags, array('file'));

        // get data from FAL
        if ($file instanceof \TYPO3\CMS\Core\Resource\File) {
            $metadata = $file->_getMetaData();
            $orig_uid = $file->getUid();
        } else {
            $metadata = false;
            $orig_uid = 0;
        }

        $indexRecordValues = array(
            'storagepid' => $this->indexerConfig['storagepid'],
            'title' => $this->fileInfo->getName(),
            'type' => 'file:' . $this->fileInfo->getExtension(),
            'targetpid' => 1,
            'tags' => $tags,
            'params' => '',
            'abstract' => '',
            'language_uid' => -1,
            'starttime' => 0,
            'endtime' => 0,
            'fe_group' => 0,
            'debug' => false
        );

        $additionalFields = array(
            'sortdate' => $this->fileInfo->getModificationTime(),
            'orig_uid' => $orig_uid,
            'orig_pid' => 0,
            'directory' => $this->fileInfo->getRelativePath(),
            'hash' => $this->getUniqueHashForFile()
        );

        // add additional content if FAL is used
        if ($this->pObj->indexerConfig['fal_storage'] > 0) {
            // index meta data from FAL: title, description, alternative
            $additionalContent = '';

            if ($metadata['fe_groups']) {
                $indexRecordValues['fe_group'] = $metadata['fe_groups'];
            }

            if ($metadata['title']) {
                $additionalContent = $metadata['title'] . "\n" ;
            }

            if ($metadata['description']) {
                $indexRecordValues['abstract'] = $metadata['description'];
                $additionalContent .= $metadata['description'] . "\n";
            }

            if ($metadata['alternative']) {
                $additionalContent .= $metadata['alternative'] . "\n";
            }

            // remove previously indexed additional content elements (they can be identified by having trailing
            // linebreaks, the linebreaks in the file content have been removed)
            if (strpos($content, "\n")) {
                $content = substr($content, strrpos($content, "\n"));
            }

            // add additional content
            $content = $additionalContent . $content;

            // make tags from assigned categories
            $categories = tx_kesearch_helper::getCategories($metadata['uid'], 'sys_file_metadata');
            tx_kesearch_helper::makeTags($indexRecordValues['tags'], $categories['title_list']);

            // assign categories as generic tags (eg. "syscat123")
            tx_kesearch_helper::makeSystemCategoryTags(
                $indexRecordValues['tags'],
                $metadata['uid'],
                'sys_file_metadata'
            );
        }

        // hook for custom modifications of the indexed data, e. g. the tags
        if (is_array($GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['ke_search']['modifyFileIndexEntry'])) {
            foreach ($GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['ke_search']['modifyFileIndexEntry'] as $_classRef) {
                $_procObj = &GeneralUtility::getUserObj($_classRef);
                $_procObj->modifyFileIndexEntry($file, $content, $additionalFields, $indexRecordValues, $this);
            }
        }

        // store record in index table
        $this->pObj->storeInIndex(
            $indexRecordValues['storagepid'],   // storage PID
            $indexRecordValues['title'],        // page title
            $indexRecordValues['type'],         // content type
            $indexRecordValues['targetpid'],    // target PID: where is the single view?
            $content,                           // indexed content, includes the title (linebreak after title)
            $indexRecordValues['tags'],         // tags
            $indexRecordValues['params'],       // typolink params for singleview
            $indexRecordValues['abstract'],     // abstract
            $indexRecordValues['language_uid'], // language uid
            $indexRecordValues['starttime'],    // starttime
            $indexRecordValues['endtime'],      // endtime
            $indexRecordValues['fe_group'],     // fe_group
            $indexRecordValues['debug'],        // debug only?
            $additionalFields                    // additional fields added by hooks
        );
    }
}
