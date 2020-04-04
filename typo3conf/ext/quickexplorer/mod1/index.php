<?php
namespace Parousia\CMS\Backend\Module;

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
					
/***************************************************************

     The Original Code is index.php, released on 2003-04-02.

     The Initial Developer of the Original Code is The QuiX project.
	 f
	 quix@free.fr
	 http://www.quix.tk
	 http://quickexplorer.sourceforge.net

****************************************************************/
USE TYPO3\CMS\Backend\Module\BaseScriptClass;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Backend\Utility\BackendUtility;
use TYPO3\CMS\Backend\Routing\Router;
use TYPO3\CMS\Core\Http\ServerRequest;
use Psr\Http\Message\ResponseInterface;



	
/** 	
 * Module 'quickexplorer' for the 'quickexplorer' extension.
 *
 * @author	Karel Kuijpers <karelkuijpers@gmail.com>
 */
	


	// DEFAULT initialization of a module [BEGIN]
	// DEFAULT initialization of a module [END]

//require_once PATH_site."typo3conf/ext/churchadmin/inc/class.church_div.php";

class quickExplorer extends BaseScriptClass {

	var $BACK_PATH = '';

    /**
     * The name of the module
     *
     * @var string
     */
    protected $moduleName = 'tools_quickexplorer';

	var $routes = array();
	/**
	 * Initializes the module. Basically just calls parent::init
	 * Initialize language files
 	 *
	 * @return	void
	 */
    /**
     */
    public function init()
    {

       	$GLOBALS['SOBE'] = $this;
		// Include the LL file 
		$GLOBALS['LANG']->includeLLFile('EXT:quickexplorer/Resources/Private/Language/locallang.xml');
        $this->MCONF['name'] = $this->moduleName;
  		parent::init();   }

	/**
	 * Main function of the module. Write the content to $this->content
	 */
	function main()	{
        // Setting module configuration:

/*		$router = GeneralUtility::makeInstance(\TYPO3\CMS\Backend\Routing\Router::class);
        $this->routes = $router->getRoutes();
		(date("Y-m-d H:i:s")." - ".$_SERVER['PHP_SELF'].": ".'mod routes:'.GeneralUtility::array2xml(array_keys($this->routes))."\r\n",3,'quickexplorer.txt'); 
		*/

		$this->BACK_PATH = '../../../../typo3/';
//		$GLOBALS['LANG']->includeLLFile('EXT:quickexplorer/Resources/Private/Language/locallang.xml');
		$GLOBALS['T3Q_VARS'] = array();
		$config = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['quickexplorer']);
		if (is_array($config)) $GLOBALS['T3Q_VARS'] = array_merge($GLOBALS['T3Q_VARS'],$config);

		if(!strlen(trim($GLOBALS['T3Q_VARS']['editable_ext']))){
			$GLOBALS['T3Q_VARS']['editable_ext'] = "\.phpcron$|\.ts$|\.tmpl$|\.txt$|\.php$|\.php3$|\.phtml$|\.inc$|\.sql$|\.pl$|\.htm$|\.html$|\.shtml$|\.dhtml$|\.xml$|\.js$|\.css$|\.cgi$|\.cpp$\.c$|\.cc$|\.cxx$|\.hpp$|\.h$|\.pas$|\.p$|\.java$|\.py$|\.sh$\.tcl$|\.tk$";
		} 

		
//		if(!strlen(trim($GLOBALS['T3Q_VARS']['home_dir']))){
			$GLOBALS["T3Q_VARS"]["home_dir"] = preg_replace('/\/$/','',PATH_site);
//		}

//		if(!strlen(trim($GLOBALS['T3Q_VARS']['home_url']))){
//			$GLOBALS['T3Q_VARS']['home_url'] = GeneralUtility::getIndpEnv('TYPO3_REQUEST_HOST').'/typo3conf/ext/quickexplorer/mod1';
			$GLOBALS['T3Q_VARS']['home_url'] = GeneralUtility::getIndpEnv('TYPO3_REQUEST_HOST');
//		}
		
		if(!strlen(trim($GLOBALS['T3Q_VARS']['module_url']))){
			$GLOBALS['T3Q_VARS']['module_url'] = BackendUtility::getModuleUrl($this->MCONF['name']);
		}

		$GLOBALS['T3Q_VARS']['super_mimes'] = array(
			// dir, exe, file
			'dir'	=> array($GLOBALS['LANG']->getLL('mime.dir'),'folder.gif'),
			'exe'	=> array($GLOBALS['LANG']->getLL('mime.exe'),'exe.gif',"\.exe$|\.com$|\.bin$"),
			'file'	=> array($GLOBALS['LANG']->getLL('mime.file'),'default.gif')
		);
		$GLOBALS['T3Q_VARS']['used_mime_types'] = array(
			// text
			'text'	=> array($GLOBALS['LANG']->getLL('mime.text'),'txt.gif',"\.txt$"),
			
			// programming
			'php'	=> array($GLOBALS['LANG']->getLL('mime.php'),'php.gif',"\.php$|\.php3$|\.phtml$|\.inc$"),
			'sql'	=> array($GLOBALS['LANG']->getLL('mime.sql'),'src.gif',"\.sql$"),
			'perl'	=> array($GLOBALS['LANG']->getLL('mime.perl'),'pl.gif',"\.pl$"),
			'html'	=> array($GLOBALS['LANG']->getLL('mime.html'),'html.gif',"\.htm$|\.html$|\.shtml$|\.dhtml$|\.xml$"),
			'js'	=> array($GLOBALS['LANG']->getLL('mime.js'),'js.gif',"\.js$"),
			'css'	=> array($GLOBALS['LANG']->getLL('mime.css'),'src.gif',"\.css$"),
			'cgi'	=> array($GLOBALS['LANG']->getLL('mime.cgi'),'exe.gif',"\.cgi$"),
			//'py'	=> array($GLOBALS['LANG']->getLL('mime.py'),'py.gif',"\.py$"),
			//'sh'	=> array($GLOBALS['LANG']->getLL('mime.sh'),'sh.gif',"\.sh$"),
			// C++
			'cpps'	=> array($GLOBALS['LANG']->getLL('mime.cpps'),'cpp.gif',"\.cpp$|\.c$|\.cc$|\.cxx$"),
			'cpph'	=> array($GLOBALS['LANG']->getLL('mime.cpph'),'h.gif',"\.hpp$|\.h$"),
			// Java
			'javas'	=> array($GLOBALS['LANG']->getLL('mime.javas'),'java.gif',"\.java$"),
			'javac'	=> array($GLOBALS['LANG']->getLL('mime.javac'),'java.gif',"\.class$|\.jar$"),
			// Pascal
			'pas'	=> array($GLOBALS['LANG']->getLL('mime.pas'),'src.gif',"\.p$|\.pas$"),
			
			// images
			'gif'	=> array($GLOBALS['LANG']->getLL('mime.gif'),'image.gif',"\.gif$"),
			'jpg'	=> array($GLOBALS['LANG']->getLL('mime.jpg'),'image.gif',"\.jpg$|\.jpeg$"),
			'bmp'	=> array($GLOBALS['LANG']->getLL('mime.bmp'),'image.gif',"\.bmp$"),
			'png'	=> array($GLOBALS['LANG']->getLL('mime.png'),'image.gif',"\.png$"),
			
			// compressed
			'zip'	=> array($GLOBALS['LANG']->getLL('mime.zip'),'zip.gif',"\.zip$"),
			'tar'	=> array($GLOBALS['LANG']->getLL('mime.tar'),'tar.gif',"\.tar$"),
			'gzip'	=> array($GLOBALS['LANG']->getLL('mime.gzip'),'tgz.gif',"\.tgz$|\.gz$"),
			'bzip2'	=> array($GLOBALS['LANG']->getLL('mime.bzip2'),'tgz.gif',"\.bz2$"),
			'rar'	=> array($GLOBALS['LANG']->getLL('mime.rar'),'tgz.gif',"\.rar$"),
			//'deb'	=> array($GLOBALS['LANG']->getLL('mime.deb'),'package.gif',"\.deb$"),
			//'rpm'	=> array($GLOBALS['LANG']->getLL('mime.rpm'),'package.gif',"\.rpm$"),
			
			// music
			'mp3'	=> array($GLOBALS['LANG']->getLL('mime.mp3'),'mp3.gif',"\.mp3$"),
			'wav'	=> array($GLOBALS['LANG']->getLL('mime.wav'),'sound.gif',"\.wav$"),
			'midi'	=> array($GLOBALS['LANG']->getLL('mime.midi'),'midi.gif',"\.mid$"),
			'real'	=> array($GLOBALS['LANG']->getLL('mime.real'),'real.gif',"\.rm$|\.ra$|\.ram$"),
			//'play'	=> array($GLOBALS['LANG']->getLL('mime.play'),'mp3.gif',"\.pls$|\.m3u$"),
			
			// movie
			'mpg'	=> array($GLOBALS['LANG']->getLL('mime.mpg'),'video.gif',"\.mpg$|\.mpeg$"),
			'mov'	=> array($GLOBALS['LANG']->getLL('mime.mov'),'video.gif',"\.mov$"),
			'avi'	=> array($GLOBALS['LANG']->getLL('mime.avi'),'video.gif',"\.avi$"),
			'flash'	=> array($GLOBALS['LANG']->getLL('mime.flash'),'flash.gif',"\.swf$"),
			
			// Micosoft / Adobe
			'word'	=> array($GLOBALS['LANG']->getLL('mime.word'),'word.gif',"\.doc$"),
			'excel'	=> array($GLOBALS['LANG']->getLL('mime.excel'),'spread.gif',"\.xls$"),
			'pdf'	=> array($GLOBALS['LANG']->getLL('mime.pdf'),'pdf.gif',"\.pdf$")
		);
		
				
		//general date format used in listings
		$GLOBALS['T3Q_VARS']['date_fmt'] = 'd/m/Y H:i';
		$GLOBALS['T3Q_VARS']['moduleData'] = $this->MOD_SETTINGS;
	//	error_log(date("Y-m-d H:i:s")." - ".$_SERVER['PHP_SELF'].": ".'mod mconf:'.GeneralUtility::array2xml($MCONF)."\r\n",3,'quickexplorer.txt');

		if(GeneralUtility::_GET('action')) $GLOBALS['T3Q_VARS']['action']=GeneralUtility::_GET('action');
			else $GLOBALS['T3Q_VARS']['action']='list';
		if($GLOBALS['T3Q_VARS']['action']=="post" && GeneralUtility::_POST('do_action')) {
			$GLOBALS['T3Q_VARS']['action']=GeneralUtility::_POST('do_action');
		}
		if($GLOBALS['T3Q_VARS']['action']=='') $GLOBALS['T3Q_VARS']['action']='list';


		if(GeneralUtility::_POST('jumptodir')){
			 $GLOBALS['T3Q_VARS']['dir']=GeneralUtility::_POST('jumpdir');
//			error_log(date("Y-m-d H:i:s")." - ".$_SERVER['PHP_SELF'].": ".'JUMP dir:'.$GLOBALS['T3Q_VARS']['dir']."\r\n",3,'quickexplorer.txt');
		} elseif(GeneralUtility::_GET('dir')){
			$GLOBALS['T3Q_VARS']['dir'] = GeneralUtility::_GET('dir');
//		error_log(date("Y-m-d H:i:s")." - ".$_SERVER['PHP_SELF'].": ".'get dir:'.$GLOBALS['T3Q_VARS']['dir']."\r\n",3,'quickexplorer.txt');
			
		} elseif($GLOBALS['T3Q_VARS']['moduleData']['dir'] && !isset($_GET['dir'])){
			 $GLOBALS['T3Q_VARS']['dir']=$GLOBALS['T3Q_VARS']['moduleData']['dir'];
//			error_log(date("Y-m-d H:i:s")." - ".$_SERVER['PHP_SELF'].": ".'MODULE dir:'.$GLOBALS['T3Q_VARS']['dir']."\r\n",3,'quickexplorer.txt');
		}
		else $GLOBALS['T3Q_VARS']['dir'] = '';

		if($GLOBALS['T3Q_VARS']['dir']=='.') $GLOBALS['T3Q_VARS']['dir']='';

		$GLOBALS['T3Q_VARS']['moduleData']['dir'] =  $GLOBALS['T3Q_VARS']['dir'];
		
		if(GeneralUtility::_GET('item')) $GLOBALS['T3Q_VARS']['item']=GeneralUtility::_GET('item');
		else $GLOBALS['T3Q_VARS']['item']='';

		if(GeneralUtility::_GET('order')) $GLOBALS['T3Q_VARS']['order'] = GeneralUtility::_GET('order');
		else $GLOBALS['T3Q_VARS']['order']='name';
		if($GLOBALS['T3Q_VARS']['order']=='') $GLOBALS['T3Q_VARS']['order'] = 'name';
		
		if(GeneralUtility::_GET('srt')) $GLOBALS['T3Q_VARS']['srt']=GeneralUtility::_GET('srt');
		else $GLOBALS['T3Q_VARS']['srt']='yes';
		if($GLOBALS['T3Q_VARS']['srt']=='') $GLOBALS['T3Q_VARS']['srt']=='yes';

			// Draw the header.
		$this->doc = GeneralUtility::makeInstance('TYPO3\CMS\Backend\Template\DocumentTemplate');
		$this->doc->backPath = $this->BACK_PATH;
		$this->doc->addStyleSheet('quickexplorer', '../'.ExtensionManagementUtility::siteRelPath('quickexplorer').'Resources/Public/Css/layout.css', $title = 'quickexplorer', $relation = 'stylesheet');
		
		
		# Render content:
		# NOTE NOTE NOTE
		# $this->doc->JScode is set in $this->moduleContent()
		# therefore it is very important that $this->moduleContent()
		# is called before $this->doc->startPage() and that the output
		# of this function is added to $this->content AFTER that
		# $this->doc->startPage() is called.
		
		$mainsection = $this->moduleContent();
		$this->content .= '<a name="top"></a>';		
		$this->content .= $this->doc->startPage($GLOBALS['LANG']->getLL('title'));		
		$this->content .= $this->doc->header($GLOBALS['LANG']->getLL('title'));
		$this->content .= $this->doc->section($mainsection['header'],$mainsection['content']);
		
		// ShortCut
		if ($this->getBackendUser()->mayMakeShortcut())	{
			$this->content.=$this->doc->section('',$this->doc->makeShortcutIcon('id,dir,item,action',implode(',',array_keys($this->MOD_MENU)),$this->MCONF['name']));
		}
		$this->getBackendUser()->pushModuleData('tools_quickexplorer',$GLOBALS['T3Q_VARS']['moduleData']);
	}

	/**
	 * Prints out the module HTML
	 */
	function printContent()	{

		$this->content.=$this->doc->endPage();
		echo $this->content;
	}
	
	/**
	 * Generates the module content
	*/
	function moduleContent()	{

		$section = array();
		$GLOBALS['T3Q_DEBUG']['initial_errors']= count($GLOBALS['T3Q_ERRORS']);
		switch ($GLOBALS['T3Q_VARS']['action']){

			case 'edit':
				require(ExtensionManagementUtility::extPath('quickexplorer').'mod1/quickexplorer_edit.php');
				$editObj = GeneralUtility::makeInstance('quickexplorer_edit');
				$section['header'] = $GLOBALS['LANG']->getLL('message.actedit');
				$section['content'] = $editObj->main($GLOBALS['T3Q_VARS']['dir'],$GLOBALS['T3Q_VARS']['item'],$this);
				break;

			case 'extract':
				require(ExtensionManagementUtility::extPath('quickexplorer').'mod1/quickexplorer_extract.php');
				$extractObj = GeneralUtility::makeInstance('quickexplorer_extract');
				$section['header'] = $GLOBALS['LANG']->getLL('message.actextract');
				$section['content'] = $extractObj->main($GLOBALS['T3Q_VARS']['dir'],$GLOBALS['T3Q_VARS']['item'],$this);
				break;

			case 'arch':
				require(ExtensionManagementUtility::extPath('quickexplorer').'mod1/quickexplorer_archive.php');
				$archObj = GeneralUtility::makeInstance('quickexplorer_archive');
				$section['header'] = $GLOBALS['LANG']->getLL('message.actarchive');
				$section['content'] = $archObj->main($GLOBALS['T3Q_VARS']['dir'],$this);
				break;
				
			case 'copy':	
			case 'move':
			case 'paste':
			case 'clear':
				require(ExtensionManagementUtility::extPath('quickexplorer').'mod1/quickexplorer_copymove.php');
				$copymoveObj = GeneralUtility::makeInstance('quickexplorer_copymove');
				$copymoveObj->main($GLOBALS['T3Q_VARS']['dir'],$this);
				break;

			case 'rename':
				require(ExtensionManagementUtility::extPath('quickexplorer').'mod1/quickexplorer_rename.php');
				$renameObj = GeneralUtility::makeInstance('quickexplorer_rename');
				$section['header'] = $GLOBALS['LANG']->getLL('message.actrename');
				$section['content'] = $renameObj->main($GLOBALS['T3Q_VARS']['dir'],$GLOBALS['T3Q_VARS']['item'],$this);
				break;

			case 'chmod':
				require(ExtensionManagementUtility::extPath('quickexplorer').'mod1/quickexplorer_chmod.php');
				$chmodObj = GeneralUtility::makeInstance('quickexplorer_chmod');
				$section['header'] = $GLOBALS['LANG']->getLL('message.actperms');
				$section['content'] = $chmodObj->main($GLOBALS['T3Q_VARS']['dir'],$GLOBALS['T3Q_VARS']['item'],$this);
				break;
				
			case 'delete':
				require(ExtensionManagementUtility::extPath('quickexplorer').'mod1/quickexplorer_delete.php');
				$deleteObj = GeneralUtility::makeInstance('quickexplorer_delete');
				$deleteObj->main($GLOBALS['T3Q_VARS']['dir'],$this); //no content added
				break;
				
			case 'mkitem':
				require(ExtensionManagementUtility::extPath('quickexplorer').'mod1/quickexplorer_mkitem.php');
				$mkitemObj = GeneralUtility::makeInstance('quickexplorer_mkitem');
				$mkitemObj->main($GLOBALS['T3Q_VARS']['dir'],$this); //no content added
				break;

			case 'upload':
				require(ExtensionManagementUtility::extPath('quickexplorer').'mod1/quickexplorer_upload.php');
				$uploadObj = GeneralUtility::makeInstance('quickexplorer_upload');
				$section['header'] = $GLOBALS['LANG']->getLL('message.actupload');
				$section['content'] = $uploadObj->main($GLOBALS['T3Q_VARS']['dir'],$this);
				break;
				
			case 'download':
				require(ExtensionManagementUtility::extPath('quickexplorer').'mod1/quickexplorer_download.php');
				$downloadObj = GeneralUtility::makeInstance('quickexplorer_download');
				$downloadObj->main($GLOBALS['T3Q_VARS']['dir'],$GLOBALS['T3Q_VARS']['item'],$this);
				break;
			
			case 'search':
				require(ExtensionManagementUtility::extPath('quickexplorer').'mod1/quickexplorer_search.php');
				$searchObj = GeneralUtility::makeInstance('quickexplorer_search');
				$section['header'] = $GLOBALS['LANG']->getLL('message.actsearch');
				$section['content'] = $searchObj->main($GLOBALS['T3Q_VARS']['dir'],$this);
				break;

				
			case 'list':
			default:
				require(ExtensionManagementUtility::extPath('quickexplorer').'mod1/quickexplorer_listdir.php');
				$listdirObj = GeneralUtility::makeInstance('quickexplorer_listdir');
				$section['header'] = '';
				$section['content'] = $listdirObj->main($GLOBALS['T3Q_VARS']['dir'],$this);
				break;

		}

		return $section;

	}
    /**
     * Injects the request object for the current request and gathers all data
     *
     * BROWSING FILES:
     *
     * Incoming array has syntax:
     * GETvar 'id' = import page id (must be readable)
     *
     * file = 	(pointing to filename relative to PATH_site)
     *
     * [all relation fields are clear, but not files]
     * - page-tree is written first
     * - then remaining pages (to the root of import)
     * - then all other records are written either to related included pages or if not found to import-root (should be a sysFolder in most cases)
     * - then all internal relations are set and non-existing relations removed, relations to static tables preserved.
     *
     * @param ServerRequestInterface $request the current request
     * @param ResponseInterface $response
     * @return ResponseInterface the response with the content
     */
    public function mainAction(ServerRequest $request, ResponseInterface $response)
    {
        $GLOBALS['SOBE'] = $this;
        $this->init();
        $this->main();
        $response->getBody()->write($this->content);
        return $response;

    }

	
}
/*
// Make instance:
$SOBE = GeneralUtility::makeInstance('Parousia\CMS\Backend\Module\quickExplorer');
$SOBE->init();

$SOBE->main();
$SOBE->printContent(); 
*/