<?php
/***************************************************************
*  Copyright notice
*  
*  (c) 2004 Mads Brunn (madsbrunn@gmail.com)
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
***************************************************************/
/** 
 * class 'quickexplorer_extract' for the 'quickexplorer' extension.
 * Class for copy-move functionality
 *
 * @author	Karel Kuijpers <karelkuijpers@gmail.com>
 */
/***************************************************************/

require_once ('quickexplorer_div.php');


class quickexplorer_extract{
	var $overwrite = 0;

	function main($dir,$item){

		$this->overwrite = TYPO3\CMS\Core\Utility\GeneralUtility::_GP('overwrite');

		$this->content = array();

		$abs_item=quickexplorer_div::get_abs_item($dir,$item);

		
		if(TYPO3\CMS\Core\Utility\GeneralUtility::_GP('cancel')){
			header('Location: '.quickexplorer_div::make_link('list',$dir,NULL));
		}


		if(TYPO3\CMS\Core\Utility\GeneralUtility::_GP('do_extract')){
			$this->unpack($abs_item);
			header('Location: '.quickexplorer_div::make_link('list',$dir,NULL));
		} else {
			$this->content[] = '<form method="post" action="'.quickexplorer_div::make_link('extract',$dir,$item).'">';


			

			$fileList = $this->getList($abs_item);

			$this->content[]  = sprintf($GLOBALS['LANG']->getLL('message.numberoffiles'),count($fileList )).'<br /><br />';

			if(count($fileList)){
				$this->content[] = '
					<select name="filesinarchive[]" size="15" multiple="multiple" >
				';

				foreach ($fileList as $file) {
					if($file == '.') continue;

					$this->content[] = '<option value="'.$file.'">'.$file.'</option>';
				}
				$this->content[] = '</select>';

			}
			$this->content[]= '<br /><input type="checkbox" name="overwrite" value="1">&nbsp;'.$GLOBALS['LANG']->getLL('message.checkoverwrite');
			$this->content[]= '<br /><br /><input type="submit" name="do_extract" value="'.$GLOBALS['LANG']->getLL('message.doextract').'">&nbsp;';
			$this->content[]= '<input type="submit" name="cancel" value="'.$GLOBALS['LANG']->getLL('message.btncancel').'">';
			//$this->content[]= '<input type="submit" name="test" value="TEST">';
			$this->content[]= '</form>';
			return implode('',$this->content);
		}

	}





	/**
	 * This function returns a listing of an compressed file for which we have defined wrappers
	 *
	 * @param	string		Compressed file for which listing should get generated
	 * @return	array		List of files in compressed file
	 */
	function getList($file)	{
		// Handle ZIP Extensions
		if (preg_match('/\.zip$/', $file)) {
			return $this->zipGetList($file);
		}
		// Handle TAR.GZ Extensions
		if (preg_match('/\.tar\.gz$/', $file) || preg_match('/\.tgz$/', $file)) {
			return $this->targzGetList($file);
		}
		// Handle TAR.BZ2 Extensions
		if (preg_match('/\.tar\.bz2$/', $file) || preg_match('/\.tbz2$/', $file)) {
			return $this->tarbz2GetList($file);
		}
		return false;
	}


	/**
	 * This function returns a filelisting of a zip file
	 *
	 * @param	string		Return list of files in zip file
	 * @return	array		List of files
	 */
	function zipGetList($file)	{
		if (!(isset($GLOBALS['TYPO3_CONF_VARS']['BE']['unzip']['list']['split_char'])&&
		  isset($GLOBALS['TYPO3_CONF_VARS']['BE']['unzip']['list']['pre_lines']) &&
		  isset($GLOBALS['TYPO3_CONF_VARS']['BE']['unzip']['list']['post_lines']) &&
		  isset($GLOBALS['TYPO3_CONF_VARS']['BE']['unzip']['list']['file_pos']))) {
			return array();
		}
		$unzip = $GLOBALS['TYPO3_CONF_VARS']['BE']['unzip_path']?$GLOBALS['TYPO3_CONF_VARS']['BE']['unzip_path']:'unzip';
		$cmd = $unzip.' -l "'.$file.'"';
		exec($cmd, $list, $ret);
		if ($ret) {
			return array();
		}
		$sc = $GLOBALS['TYPO3_CONF_VARS']['BE']['unzip']['list']['split_char'];
		$pre = intval($GLOBALS['TYPO3_CONF_VARS']['BE']['unzip']['list']['pre_lines']);
		$post = intval($GLOBALS['TYPO3_CONF_VARS']['BE']['unzip']['list']['post_lines']);
		$pos = intval($GLOBALS['TYPO3_CONF_VARS']['BE']['unzip']['list']['file_pos']);
		while ($pre--) {
			array_shift($list);
		}
		while ($post--) {
			array_pop($list);
		}
		$fl = array();
		foreach ($list as $file) {
			$parts = explode($sc, $file);
			$fparts = array();
			foreach ($parts as $part) {
				if (strlen($part)) $fparts[] = trim($part);
			}
			$fl[] = $fparts[$pos];
		}
		return $fl;
	}

	/**
	 * This function returns a filelisting of a tar.gz file
	 *
	 * @param	string		Return list of files in tar.gz file
	 * @return	array		List of files
	 */
	function targzGetList($file)	{
		$cmd = 'tar -tzf "'.$file.'"';
		exec($cmd, $list, $ret);
		if ($ret) {
			return array();
		}
		return $list;
	}
	/**
	 * This function returns a filelisting of a tar.bz2 file
	 *
	 * @param	string		Return list of files in tar.bz2 file
	 * @return	array		List of files
	 */
	function tarbz2GetList($file)	{
		$cmd = 'tar -tjf "'.$file.'"';
		exec($cmd, $list, $ret);
		if ($ret) {
			return array();
		}
		return $list;
	}


	/**
	 * This function returns the files extracted by the call to the specific unpack-wrapper for the supplied file
	 *
	 * @param	string		File to unpack
	 * @return	array		Files unpacked
	 */
	function unpack($file)	{
		// Handle ZIP Extensions
		if (preg_match('/\.zip$/', $file)) {
			return $this->zipUnpack($file);
		}
		// Handle TAR.GZ Extensions
		if (preg_match('/\.tar\.gz$/', $file) || preg_match('/\.tgz$/', $file)) {
			return $this->targzUnpack($file);
		}
		// Handle TAR.BZ2 Extensions
		if (preg_match('/\.tar\.bz2$/', $file) || preg_match('/\.tbz2$/', $file)) {
			return $this->tarbz2Unpack($file);
		}
		return false;
	}


	/**
	 * This function unpacks a zip file
	 *
	 * @param	string		File to unpack
	 * @return	array		Files unpacked
	 */

	function zipUnpack($file)	{
		if (!(isset($GLOBALS['TYPO3_CONF_VARS']['BE']['unzip']['unzip']['split_char'])&&
		  isset($GLOBALS['TYPO3_CONF_VARS']['BE']['unzip']['unzip']['pre_lines']) &&
		  isset($GLOBALS['TYPO3_CONF_VARS']['BE']['unzip']['unzip']['post_lines']) &&
		  isset($GLOBALS['TYPO3_CONF_VARS']['BE']['unzip']['unzip']['file_pos']))) {
			return array();
		}
		$path = dirname($file);
		chdir($path);
		// Unzip without overwriting existing files
		$unzip = $GLOBALS['TYPO3_CONF_VARS']['BE']['unzip_path']?$GLOBALS['TYPO3_CONF_VARS']['BE']['unzip_path']:'unzip';
		if ($this->overwrite) {
			$cmd = $unzip.' -o "'.$file.'"';
		} else {
			$cmd = $unzip.' -n "'.$file.'"';
		}


		$filesinarchive = TYPO3\CMS\Core\Utility\GeneralUtility::_GP('filesinarchive'); 
		if(is_array($filesinarchive) && !empty($filesinarchive)){
			foreach($filesinarchive as $filetoextract){
				$cmd .= ' "'.$filetoextract.'"';
			}
		}

		exec($cmd, $list, $ret);
		if ($ret) {
			return array();
		}
		$sc = $GLOBALS['TYPO3_CONF_VARS']['BE']['unzip']['unzip']['split_char'];
		$pre = intval($GLOBALS['TYPO3_CONF_VARS']['BE']['unzip']['unzip']['pre_lines']);
		$post = intval($GLOBALS['TYPO3_CONF_VARS']['BE']['unzip']['unzip']['post_lines']);
		$pos = intval($GLOBALS['TYPO3_CONF_VARS']['BE']['unzip']['unzip']['file_pos']);
		while ($pre--) {
			array_shift($list);
		}
		while ($post--) {
			array_pop($list);
		}
		$fl = array();
		foreach ($list as $file) {
			$parts = explode($sc, $file);
			$fparts = array();
			foreach ($parts as $part) {
				if (strlen($part)) $fparts[] = trim($part);
			}
			$fl[] = $fparts[$pos];
		}
		return $fl;
	}


	/**
	 * This function unpacks a tar.gz file
	 *
	 * @param	string		File to unpack
	 * @return	array		Files unpacked
	 */
	function targzUnpack($file)	{
		$path = dirname($file);
		chdir($path);
		if ($this->overwrite) {
			$cmd = 'tar -xzvf "'.$file.'"';
		} else {
			$cmd = 'tar -xzvkf "'.$file.'"';
		}

		$filesinarchive = TYPO3\CMS\Core\Utility\GeneralUtility::_GP('filesinarchive'); 
		if(is_array($filesinarchive) && !empty($filesinarchive)){
			foreach($filesinarchive as $filetoextract){
				$cmd .= ' "'.$filetoextract.'"';
			}
		}

		exec($cmd, $list, $ret);
		if ($this->overwrite) {
			// We are in overwrite mode
			// Check if return value of
			// exec is set == Error
			if ($ret) {
				return array();
			}
		}
		return $list;
	}


	/**
	 * This function unpacks a tar.bz2 file
	 *
	 * @param	string		File to unpack
	 * @return	array		Files unpacked
	 */
	function tarbz2Unpack($file)	{
		$path = dirname($file);
		chdir($path);
		if ($this->overwrite) {
			$cmd = 'tar -xjvf "'.$file.'"';
		} else {
			$cmd = 'tar -xjvkf "'.$file.'"';
		}

		$filesinarchive = TYPO3\CMS\Core\Utility\GeneralUtility::_GP('filesinarchive'); 
		if(is_array($filesinarchive) && !empty($filesinarchive)){
			foreach($filesinarchive as $filetoextract){
				$cmd .= ' "'.$filetoextract.'"';
			}
		}

		exec($cmd, $list, $ret);
		if ($this->overwrite) {
			// We are in overwrite mode
			// Check if return value of
			// exec is set == Error
			if ($ret) {
				return array();
			}
		}
		return $list;
	}



}
