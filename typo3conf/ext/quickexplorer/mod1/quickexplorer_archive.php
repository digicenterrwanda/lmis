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
 * class 'quickexplorer_archive' for the 'quickexplorer' extension.
 * Contains functions to create an archive.
 *
 * @author	Karel Kuijpers <karelkuijpers@gmail.com>
 */
/***************************************************************

     The Original Code is fun_archive.php, released on 2003-03-31.

     The Initial Developer of the Original Code is The QuiX project.
	 
	 quix@free.fr
	 http://www.quix.tk
	 http://quickexplorer.sourceforge.net

****************************************************************/
require_once('quickexplorer_div.php');
require_once('quickexplorer_zipfile.php');


class quickexplorer_archive{


	function main($dir) {
		$content = array();
		
		
		if(TYPO3\CMS\Core\Utility\GeneralUtility::_POST('name')) {
			$name=basename(stripslashes(TYPO3\CMS\Core\Utility\GeneralUtility::_POST('name')));
			if($name=='') quickexplorer_div::showError($GLOBALS['LANG']->getLL('error.miscnoname'));
			switch(TYPO3\CMS\Core\Utility\GeneralUtility::_POST('type')) {
				case 'zip':	
					$this->zip_items($dir,$name);	
					break;
				default:	
					$this->zip_items($dir,$name);
					break;
			}
			header('Location: '.quickexplorer_div::make_link('list',$dir,NULL));
		}
		
		$content[] = '
			<br />
			  <form name="archform" method="post" action="'.quickexplorer_div::make_link('arch',$dir,NULL).'">
			 ';
		
		$selitems = TYPO3\CMS\Core\Utility\GeneralUtility::_POST('selitems');
		
		$cnt=count($selitems);
		for($i=0;$i<$cnt;++$i) {
			$content[] = '<input type="hidden" name="selitems[]" value="'.stripslashes($selitems[$i]).'">';
		}
		
		$content[] = '
			<table width="300">
			  <tr>
			    <td>'.$GLOBALS['LANG']->getLL('message.nameheader').':</td>
				<td align="right"><input type="text" name="name" size="25"></td>
			  </tr>
			  <tr>
			    <td>'.$GLOBALS['LANG']->getLL('message.typeheader').':</td>
				<td align="right">
				  <select name="type">
				    <option value="zip">zip</option>
				  </select>
				</td>
			  </tr>
		      <tr>
			    <td> </td>
				<td align="right">
				  <input type="submit" value="'.$GLOBALS['LANG']->getLL('message.btncreate').'">
				  <input type="button" value="'.$GLOBALS['LANG']->getLL('message.btncancel').'" onClick="javascript:location=\''.quickexplorer_div::make_link('list',$dir,NULL).'\';">
				</td>
			  </tr>
			 </form>
			 </table>
			 <br />';
			 
		return implode('',$content);
	}

	
	
	function zip_items($dir,$name) {
		
		$name .= (strtolower(pathinfo($name, PATHINFO_EXTENSION))!='zip') ? '.zip' : '';
	
		$selitems = TYPO3\CMS\Core\Utility\GeneralUtility::_POST('selitems');
	
		$cnt=count($selitems);
		$abs_dir=quickexplorer_div::get_abs_dir($dir);
		
		$zipfile=TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('quickexplorer_zipfile');
		for($i=0;$i<$cnt;++$i) {
			$selitem=stripslashes($selitems[$i]);
			if(!$zipfile->add($abs_dir,$selitem)) {
				quickexplorer_div::showError($selitem.': Failed adding item.');
			}
		}
		if(!$zipfile->save(quickexplorer_div::get_abs_item($dir,$name))) {
			quickexplorer_div::showError($name.': Failed saving zipfile.');
		}
		
		header('Location: '.quickexplorer_div::make_link('list',$dir,NULL));
	}
}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/quickexplorer/mod1/quickexplorer_archive.php'])	{
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/quickexplorer/mod1/quickexplorer_archive.php']);
}

