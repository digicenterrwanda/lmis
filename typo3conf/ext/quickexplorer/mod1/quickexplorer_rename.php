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
*  The GNU General Public License can  be found at
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
 * class 'quickexplorer_rename' for the 'quickexplorer' extension.
 * Class to a edit a text file
 *
 * @author	Karel Kuijpers <karelkuijpers@gmail.com>
 */




require_once ('quickexplorer_div.php');

class quickexplorer_rename{



	
	function main($dir, $item) {		
		$this->content= array();

		if(!quickexplorer_div::get_show_item($dir, $item)) quickexplorer_div::showError($item.': '.$GLOBALS['LANG']->getLL('error.accessfile'));

		if(TYPO3\CMS\Core\Utility\GeneralUtility::_GP('cancel')){
			header('Location: '.quickexplorer_div::make_link('list',$dir,NULL));
		}


		if(TYPO3\CMS\Core\Utility\GeneralUtility::_GP('dorename') &&  $fname = TYPO3\CMS\Core\Utility\GeneralUtility::_GP('fname')){
			if(!preg_match('/[a-zA-Z0-9\.-_]+/',$fname)) quickexplorer_div::showError($fname.': '.$GLOBALS['LANG']->getLL('error.invalidfilename'));
			$oldname = quickexplorer_div::get_abs_item($dir, $item);
			$newname = quickexplorer_div::get_abs_item($dir, $fname);
			if(!strlen(trim($newname))){
				quickexplorer_div::showError($GLOBALS['LANG']->getLL('error.miscnoname'));	
			}

			if(@file_exists($newname)){
				 quickexplorer_div::showError($newname.': '.$GLOBALS['LANG']->getLL('error.itemdoesexist'));
			}

			if(rename($oldname,$newname)){
				header('Location: '.quickexplorer_div::make_link('list',$dir,NULL));
			} else {
				quickexplorer_div::showError($oldname.': '.$GLOBALS['LANG']->getLL('error.renamefailed'));
			}
		}



		$this->content[] = '
			<br /><br /><form name="renamefrm" method="post" action="'.quickexplorer_div::make_link('rename',$dir,$item).'">
			'.$dir.'/&nbsp;<input type="text" name="fname" value="'.$item.'" size="30"><br /><br />
			<input type="submit" value="'.$GLOBALS['LANG']->getLL('message.btnrename').'" name="dorename">&nbsp;<input type="submit" value="'.$GLOBALS['LANG']->getLL('message.btncancel').'" name="cancel">
			</form>
		';
		return implode('',$this->content);
	}



}
