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
 * class 'quickexplorer_download' for the 'quickexplorer' extension.
 * Contains functions to download a file
 *
 * @author	Karel Kuijpers <karelkuijpers@gmail.com>
 */
/***************************************************************

     The Original Code is fun_down.php, released on 2003-03-31.

     The Initial Developer of the Original Code is The QuiX project.
	 
	 quix@free.fr
	 http://www.quix.tk
	 http://quickexplorer.sourceforge.net

****************************************************************/

require_once ('quickexplorer_div.php');

class quickexplorer_download{
	
	function main($dir, $item) {		// download file
		global $CLIENT;
		
		if(!quickexplorer_div::get_is_file($dir,$item)) quickexplorer_div::showError($item.': '.$GLOBALS['LANG']->getLL('error.fileexist'));
		if(!quickexplorer_div::get_show_item($dir, $item)) quickexplorer_div::showError($item.': '.$GLOBALS['LANG']->getLL('error.accessfile'));
		
		$abs_item = quickexplorer_div::get_abs_item($dir,$item);
		header('Content-Type: '.(($CLIENT['BROWSER']=='msie' || $CLIENT['BROWSER']=='opera')?'application/octetstream':'application/octet-stream'));
		header('Expires: '.gmdate('D, d M Y H:i:s').' GMT');
		header('Content-Transfer-Encoding: binary');
		header('Content-Length: '.filesize($abs_item));
		if($CLIENT['BROWSER']=='msie') {
			header('Content-Disposition: inline; filename="'.$item.'"');
			header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
			header('Pragma: public');
		} else {
			header('Content-Disposition: attachment; filename="'.$item.'"');
			header('Cache-Control: no-cache, must-revalidate');
			header('Pragma: no-cache');
		}
		
		@readfile($abs_item);
		exit;
	}
}


if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/quickexplorer/mod1/quickexplorer_download.php'])	{
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/quickexplorer/mod1/quickexplorer_download.php']);
}

?>
