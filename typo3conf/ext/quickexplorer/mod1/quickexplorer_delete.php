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
 * class 'quickexplorer_delete' for the 'quickexplorer' extension.
 * Contains functions to delete files and folders
 *
 * @author	Karel Kuijpers <karelkuijpers@gmail.com>
 */
/***************************************************************

     The Original Code is fun_del.php, released on 2003-03-31.

     The Initial Developer of the Original Code is The QuiX project.
	 
	 quix@free.fr
	 http://www.quix.tk
	 http://quickexplorer.sourceforge.net

****************************************************************/
require_once ('quickexplorer_div.php');


class quickexplorer_delete{

	function main($dir) {		// delete files/dirs
				
		$selitems = TYPO3\CMS\Core\Utility\GeneralUtility::_POST('selitems');
		
		$cnt=count($selitems);
		$GLOBALS['T3Q_DEBUG']['selected_delete']=$cnt;
		$err=false;
		
		// delete files & check for errors
		for($i=0;$i<$cnt;++$i) {
			$items[$i] = stripslashes($selitems[$i]);
			$abs = quickexplorer_div::get_abs_item($dir,$items[$i]);
		
			if(!@file_exists(quickexplorer_div::get_abs_item($dir, $items[$i]))) {
				$error[$i]=$GLOBALS['LANG']->getLL('error.itemexist');
				$err=true;	continue;
			}
			if(!quickexplorer_div::get_show_item($dir, $items[$i])) {
				$error[$i]=$GLOBALS['LANG']->getLL('error.accessitem');
				$err=true;	continue;
			}
			
			// Delete
			$ok=quickexplorer_div::remove(quickexplorer_div::get_abs_item($dir,$items[$i]));
			
			if($ok===false) {
				$error[$i]=$GLOBALS['LANG']->getLL('error.delitem');
				$err=true;	continue;
			}
			
			$error[$i]=NULL;
		}
		
		if($err) {			// there were errors
			$err_msg='';
			for($i=0;$i<$cnt;++$i) {
				if($error[$i]==NULL) continue;
				
				$err_msg .= $items[$i].' : '.$error[$i].'<br />';
			}
			quickexplorer_div::showError($err_msg);
		}
		
		header('Location: '.quickexplorer_div::make_link('list',$dir,NULL));
	}
}
