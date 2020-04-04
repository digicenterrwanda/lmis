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
 * class 'quickexplorer_mkitem' for the 'quickexplorer' extension.
 * Contains functions to create files or folders
 *
 * @author	Karel Kuijpers <karelkuijpers@gmail.com>
 */
/***************************************************************

     The Original Code is fun_mkitem.php, released on 2003-03-31.

     The Initial Developer of the Original Code is The QuiX project.
	 
	 quix@free.fr
	 http://www.quix.tk
	 http://quickexplorer.sourceforge.net

****************************************************************/

class quickexplorer_mkitem{
	function main($dir) {		

		$mkname=TYPO3\CMS\Core\Utility\GeneralUtility::_GP('mkname');
		$mktype=TYPO3\CMS\Core\Utility\GeneralUtility::_GP('mktype');
		
		$mkname=basename(stripslashes($mkname));
		if($mkname=='') quickexplorer_div::showError($GLOBALS['LANG']->getLL('error.miscnoname'));
		
		$new = quickexplorer_div::get_abs_item($dir,$mkname);

		if(!preg_match('/[a-zA-Z0-9\.-_]+/',$mkname)) quickexplorer_div::showError($mkname.': '.$GLOBALS['LANG']->getLL('error.invalidfilename'));
		if(@file_exists($new)) quickexplorer_div::showError($mkname.': '.$GLOBALS['LANG']->getLL('error.itemdoesexist'));
		
		if($mktype!='file') {
			$ok = TYPO3\CMS\Core\Utility\GeneralUtility::mkdir($new);
			$err=$GLOBALS['LANG']->getLL('error.createdir');
		} else {
			//$ok=@touch($new);
			$ok = TYPO3\CMS\Core\Utility\GeneralUtility::writeFile($new,'');
			$err=$GLOBALS['LANG']->getLL('error.createfile');
		}
		
		if($ok===false) quickexplorer_div::showError($err);
		
		header('Location: '.quickexplorer_div::make_link('list',$dir,NULL));

	}

}
