<?php
/***************************************************************
*  Copyright notice
*  
*  (c) 2004 Mads Brunn (brunn@mail.dk)
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
 * class 'quickexplorer_copymove' for the 'quickexplorer' extension.
 * Class for copy-move functionality
 *
 * @author	Mads Brunn <brunn@mail.dk>
 */
/***************************************************************/

require_once ("quickexplorer_div.php");

class quickexplorer_copymove{


	function main($dir){
		switch($GLOBALS["T3Q_VARS"]["action"]){

			case "copy":
			case "move":
			
				$selitems = TYPO3\CMS\Core\Utility\GeneralUtility::_POST("selitems");
				$cnt=count($selitems);
				if($cnt<1){
					setCookie("copymoveitems",serialize(array()),0,'/');
					setCookie("action","",0,'/');
					setCookie("dir","",0,'/');
					header("Location: ".quickexplorer_div::make_link("list",$dir,NULL));
				}

				$copymoveitems = array();
				for($i=0;$i<$cnt;++$i) {
					$copymoveitems[] = quickexplorer_div::get_abs_item($dir,$selitems[$i]);
				}
				setCookie("copymoveitems",serialize($copymoveitems),0,'/');
				setCookie("action",$GLOBALS["T3Q_VARS"]["action"],0,'/');
				setCookie("dir",$dir,0,'/');
				
				break;


			case "paste":
				$basicFileObj = TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\CMS\Core\Utility\File\BasicFileUtility');
			
				$action = $_COOKIE["action"];
				$cmitems = unserialize(stripslashes($_COOKIE["copymoveitems"]));
				$old_dir = $_COOKIE["dir"];
				
				$cnt=count($cmitems);

				if(!@file_exists(quickexplorer_div::get_abs_dir($dir))) quickexplorer_div::showError($dir.": ".$GLOBALS['LANG']->getLL("error.targetexist"));
				if(!quickexplorer_div::get_show_item($dir,"")) quickexplorer_div::showError($dir.": ".$GLOBALS['LANG']->getLL("error.accesstarget"));
				if(!quickexplorer_div::down_home(quickexplorer_div::get_abs_dir($dir))) quickexplorer_div::showError($dir.": ".$GLOBALS['LANG']->getLL("error.targetabovehome"));
				
				// copy / move files
				$err=false;
				for($i=0;$i<$cnt;++$i) {
					//$tmp = stripslashes($GLOBALS['__POST']["selitems"][$i]);
					//$new = basename(stripslashes($GLOBALS['__POST']["newitems"][$i]));
					$abs_item = $cmitems[$i];
					$abs_new_item = quickexplorer_div::get_abs_item($dir,basename($abs_item));
					$items[$i] = basename($abs_item);
				
					// Check
					/*if($new=="") {
						$error[$i]= $GLOBALS['LANG']->getLL("error.miscnoname");
						$err=true;	continue;
					}*/
					if(!@file_exists($abs_item)) {
						$error[$i]= $GLOBALS['LANG']->getLL("error.itemexist");
						$err=true;	continue;
					}
					if(!quickexplorer_div::get_show_item($old_dir, $tmp)) {
						$error[$i]= $GLOBALS['LANG']->getLL("error.accessitem");
						$err=true;	continue;
					}
					if(@file_exists($abs_new_item)) {
						
						//$error[$i]= $GLOBALS['LANG']->getLL("error.targetdoesexist");
						//$err=true;	continue;
						
						# Changed handling of files that already exists in destination folder
						# Instead of isssuing an error the file is renamed
						$abs_new_item = $basicFileObj->getUniqueName(basename($abs_new_item),dirname($abs_new_item));
					}
				
					// Copy / Move
					if($action=="copy") {
						if(@is_link($abs_item) || @is_file($abs_item)) {
							// check file-exists to avoid error with 0-size files (PHP 4.3.0)
							$ok=@copy($abs_item,$abs_new_item);	//||@file_exists($abs_new_item);
						} elseif(@is_dir($abs_item)) {
							$ok=quickexplorer_div::copy_dir($abs_item,$abs_new_item);
						}
					} else {
						$ok=@rename($abs_item,$abs_new_item);
					}
					
					if($ok===false) {
						$error[$i]=($action=="copy"?$GLOBALS['LANG']->getLL("error.copyitem"):$GLOBALS['LANG']->getLL("error.moveitem"));
						$err=true;	continue;
					}
					
					$error[$i]=NULL;
				}
				
				if($err) {			// there were errors
					$err_msg="";
					for($i=0;$i<$cnt;++$i) {
						if($error[$i]==NULL) continue;
						
						$err_msg .= $items[$i]." : ".$error[$i]."<br />";
					}
					quickexplorer_div::showError($err_msg);
				}

				setCookie("copymoveitems",serialize(array()),0,'/');
				setCookie("action","",0,'/');
				setCookie("dir","",0,'/');
			
				break;
			
			case "clear":
			default:
				setCookie("copymoveitems",serialize(array()),0,'/');
				setCookie("action","",0,'/');
				setCookie("dir","",0,'/');
				break;
		}
		
		header("Location: ".quickexplorer_div::make_link("list",$dir,NULL));
	}
}
