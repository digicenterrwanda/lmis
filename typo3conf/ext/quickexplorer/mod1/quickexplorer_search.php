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
 * class 'quickexplorer_search' for the 'quickexplorer' extension.
 * contains functions to display searchform and searchresults and
 * to search for files and folders 
 *
 * @author	Karel Kuijpers <karelkuijpers@gmail.com>
 */
/***************************************************************

     The Original Code is fun_search.php, released on 2003-03-31.

     The Initial Developer of the Original Code is The QuiX project.
	 
	 quix@free.fr
	 http://www.quix.tk
	 http://quickexplorer.sourceforge.net

****************************************************************/
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
require_once ('quickexplorer_div.php');

class quickexplorer_search{
	function find_item($dir,$pat,&$list,$recur) {	// find items
		$handle=@opendir(quickexplorer_div::get_abs_dir($dir));
		if($handle===false) return;		// unable to open dir
		
		while(($new_item=readdir($handle))!==false) {
			if(!@file_exists(quickexplorer_div::get_abs_item($dir, $new_item))) continue;
			if(!quickexplorer_div::get_show_item($dir, $new_item)) continue;
			
			// match?
			if(@preg_match('/'.$pat.'/',$new_item)) $list[]=array($dir,$new_item);
			
			// search sub-directories
			if(quickexplorer_div::get_is_dir($dir, $new_item) && $recur) {
				$this->find_item(quickexplorer_div::get_rel_item($dir,$new_item),$pat,$list,$recur);
			}
		}
		
		closedir($handle);
	}
	//------------------------------------------------------------------------------
	function make_list($dir,$item,$subdir) {	// make list of found items
		// convert shell-wildcards to PCRE Regex Syntax
		$pat='^'.str_replace('?','.',str_replace('*','.*',str_replace('.',"\.",$item)))."$";
		
		// search
		$this->find_item($dir,$pat,$list,$subdir);
		if(is_array($list)) sort($list);
		return $list;
	}
	//------------------------------------------------------------------------------
	function print_table($list) {			// print table of found items
		global $BACK_PATH;

		if(!is_array($list)) return;
		
		$imagepath = '../'.ExtensionManagementUtility::siteRelPath('quickexplorer').'mod1/_img/';
		
		$cnt = count($list);
		for($i=0;$i<$cnt;++$i) {
			$dir = $list[$i][0];	$item = $list[$i][1];
			$s_dir=TYPO3\CMS\Core\Utility\GeneralUtility::fixed_lgd_cs($dir,62);
			$s_item=TYPO3\CMS\Core\Utility\GeneralUtility::fixed_lgd_cs($item,45);
			$link = '';	$target = '';
			
			if(quickexplorer_div::get_is_dir($dir,$item)) {
				$img = 'folder.gif';
				$link = quickexplorer_div::make_link('list',quickexplorer_div::get_rel_item($dir, $item),NULL);
			} else {
				$img = quickexplorer_div::get_mime_type($dir, $item, 'img');
				$link = $GLOBALS['T3Q_VARS']['home_url'].'/'.quickexplorer_div::get_rel_item($dir, $item);
				$target = '_blank';
			}
			
			$this->content[]='
				<tr>
				  <td>
				    <img border="0" align="absmiddle" '.WMDB\TtNews\Utility\IconFactory::skinImg($BACK_PATH,$imagepath.$img,'width="16" height="16"',0).' alt="">&nbsp;
				    <a href="'.$link.'" target="'.$target.'">'.$s_item.'</a>
				  </td>
				  <td>
				    <a href="'.quickexplorer_div::make_link('list',$dir,NULL).'"> /'.$s_dir.'</a>
				  </td>
				</tr>';
		}
	}
	//------------------------------------------------------------------------------
	function main($dir) {			// search for item

		$this->content = array();
		
		
	
		if(TYPO3\CMS\Core\Utility\GeneralUtility::_POST('searchitem')) {
			//$searchitem=preg_replace('/[^a-z0-9_\.\*\-\?]*/i','',TYPO3\CMS\Core\Utility\GeneralUtility::_POST('searchitem'));
			$searchitem = htmlspecialchars(TYPO3\CMS\Core\Utility\GeneralUtility::_POST('searchitem'));
			$subdir=TYPO3\CMS\Core\Utility\GeneralUtility::_POST('subdir')=='y';
			$list=$this->make_list($dir,$searchitem,$subdir);
		} else {
			$searchitem=NULL;
			$subdir=true;
		}
		
		$msg='';
		//if($searchitem!=NULL) $msg.=': (/' .quickexplorer_div::get_rel_item($dir, $searchitem).')';
		//show_header($msg);
		
		// Search Box
		$this->content[]=' 
			<br />
			  <table>
			    <form name="searchform" action="'.quickexplorer_div::make_link('search',$dir,NULL).'" method="post">
				<tr>
				  <td>
				    <input name="searchitem" type="text" size="25" value="'.$searchitem.'">
					<input type="submit" value="'.$GLOBALS['LANG']->getLL('message.btnsearch').'">&nbsp;
					<input type="button" value="'.$GLOBALS['LANG']->getLL('message.btnclose').'" onClick="javascript:location=\''.quickexplorer_div::make_link('list',$dir,NULL).'\';">
				  </td>
				</tr>
				<tr>
				  <td>
				    <input type="checkbox" name="subdir" value="y"'.($subdir?" checked>":">").$GLOBALS['LANG']->getLL('message.miscsubdirs').'
				  </td>
				</tr>
				</form>
			  </table>';
		
		// Results
		if($searchitem!=NULL) {
			$this->content[]='
				<table width="100%" id="typo3-filelist">
				  <tr>
				    <td colspan="2"> </td>
				  </tr>';
				  
			if(count($list)>0) {
				// Table Header
				$this->content[]='
					<tr>
					  <td width="45%" class="c-headLine">'.$GLOBALS['LANG']->getLL('message.nameheader').'</td>
					  <td width="60%" class="c-headLine">'.$GLOBALS['LANG']->getLL('message.pathheader').'</td>
					</tr>
					<tr>
					  <td colspan="2"> </td>
					</tr>';
		
				// make & print table of found items
				$this->print_table($list);
	
				$this->content[]='
					<tr>
					  <td colspan="2"> </td>
					</tr>
					<tr>
					  <td class="c-headLine">'.count($list).' '.$GLOBALS['LANG']->getLL('message.miscitems').'</td>
					  <td class="c-headLine"> </td>
					</tr>
					';
			} else {
				$this->content[]='
				   <tr>
				     <td><br /><br />'.$GLOBALS['LANG']->getLL('message.miscnoresult').'</td>
				   </tr>';
			}
			$this->content[]='
				   <tr>
				     <td colspan="2">  </TD>
				   </tr>
				 </table>';
		}
		
		return implode('',$this->content);
	}
}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/quickexplorer/mod1/quickexplorer_search.php'])	{
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/quickexplorer/mod1/quickexplorer_search.php']);
}

?>