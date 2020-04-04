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
 * class 'quickexplorer_listdir' for the 'quickexplorer' extension.
 * Contains functions to display the files and folders in a directory
 *
 * @author	Karel Kuijpers <karelkuijpers@gmail.com>
 */
/***************************************************************

     The Original Code is fun_list.php, released on 2003-03-31.

     The Initial Developer of the Original Code is The QuiX project.
	 
	 quix@free.fr
	 http://www.quix.tk
	 http://quickexplorer.sourceforge.net

****************************************************************/
use TYPO3\CMS\Core\Imaging\IconFactory;
use TYPO3\CMS\Core\Imaging\Icon;
use TYPO3\CMS\Core\Utility\PathUtility;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

require_once ('quickexplorer_div.php');

class quickexplorer_listdir{
	var $iconFactory;
		
	function make_list($_list1, $_list2) {		// make list of files
		if($GLOBALS['T3Q_VARS']['srt']=='yes') {
			$list1 = $_list1;
			$list2 = $_list2;
		} else {
			$list1 = $_list2;
			$list2 = $_list1;
		}
		
		if(is_array($list1)) {
			while (list($key, $val) = each($list1)) {
				$list[$key] = $val;
			}
		}
		
		if(is_array($list2)) {
			while (list($key, $val) = each($list2)) {
				$list[$key] = $val;
			}
		}
		return $list;
	}


	function make_tables($dir){						// make table of files in dir
		$this->dir_list = array();
		$this->file_list = array();
		$this->tot_file_size = 0;
		$this->num_items = 0;
		
		// make tables 
		// also 'return' total filesize & total number of items

		// check if dir exists
		if (!is_dir(quickexplorer_div::get_abs_dir($dir))) {
			$dir = '';
		}
		
		// Open directory
		$handle = @opendir(quickexplorer_div::get_abs_dir($dir));
		if($handle===false){
			quickexplorer_div::showError($GLOBALS['LANG']->getLL('error.opendir'));
		}
		

		// Read directory
		while(($new_item = readdir($handle))!==false) {
			$abs_new_item = quickexplorer_div::get_abs_item($dir, $new_item);

			if(@file_exists($abs_new_item)){
				if(!quickexplorer_div::get_show_item($dir, $new_item)) continue;
    
				$new_file_size = filesize($abs_new_item);
				$this->tot_file_size += $new_file_size;
				$this->num_items++;
    
				if(quickexplorer_div::get_is_dir($dir, $new_item)) {

					if($GLOBALS['T3Q_VARS']['order']=='mod') {
						$this->dir_list[$new_item] = @filemtime($abs_new_item);
					} else {    // order == "size", "type" or "name"
						$this->dir_list[$new_item] = $new_item;
					}

				} else {
					if($GLOBALS['T3Q_VARS']['order']=='size') {
						$this->file_list[$new_item] = $new_file_size;
					} elseif($GLOBALS['T3Q_VARS']['order']=='mod') {
						$this->file_list[$new_item] = @filemtime($abs_new_item);
					} elseif($GLOBALS['T3Q_VARS']['order']=='type') {
						$this->file_list[$new_item] = quickexplorer_div::get_mime_type($dir, $new_item, 'type');
					} else {    // order == "name"
						$this->file_list[$new_item] = $new_item;
					}
				}
			}
		}


		closedir($handle);
		
		
		// sort
		if(is_array($this->dir_list)) {
			if($GLOBALS['T3Q_VARS']['order']=='mod') {
				if($GLOBALS['T3Q_VARS']['srt']=='yes') arsort($this->dir_list);
				else asort($this->dir_list);
			} else {	// order == "size", "type" or "name"
				if($GLOBALS['T3Q_VARS']['srt']=='yes') ksort($this->dir_list);
				else krsort($this->dir_list);
			}
		}
		
		// sort
		if(is_array($this->file_list)) {
			if($GLOBALS['T3Q_VARS']['order']=='mod') {
				if($GLOBALS['T3Q_VARS']['srt']=='yes') arsort($this->file_list);
				else asort($this->file_list);
			} elseif($GLOBALS['T3Q_VARS']['order']=="size" || $GLOBALS['T3Q_VARS']['order']=='type') {
				if($GLOBALS['T3Q_VARS']['srt']=='yes') asort($this->file_list);
				else arsort($this->file_list);
			} else {	// order == "name"
				if($GLOBALS['T3Q_VARS']['srt']=='yes') ksort($this->file_list);
				else krsort($this->file_list);
			}
		}
	}

	
	function print_table($dir, $list){
		global $BACK_PATH;
		if(!is_array($list)) return;
		$imagepath = '../'.ExtensionManagementUtility::siteRelPath('quickexplorer').'Resources/Public/Icons/';
		//error_log(date("Y-m-d H:i:s")." - ".$_SERVER['PHP_SELF'].": quickexplorer imagepath3: ".$imagepath."\r\n",3,$_SERVER['DOCUMENT_ROOT'].'/typo3conf/ext/quickexplorer/mod1/debug.log');
		
		
		$classname = 'bgColor-10';

		while(list($item,) = each($list)){
			// link to dir / file
			$abs_item=quickexplorer_div::get_abs_item($dir,$item);
			
			//if(is_link($abs_item)){	
			//	debug(array(basename($abs_item) => readlink($abs_item)));	
			//}
			
			
			$target='';
			//$extra='';
			//if(is_link($abs_item)) $extra=' -> '.@readlink($abs_item);
			if(is_dir($abs_item)) {
				$link = quickexplorer_div::make_link('list',quickexplorer_div::get_rel_item($dir, $item),NULL);
			} else { //if(get_is_editable($dir,$item) || get_is_image($dir,$item)) {
				$link = $GLOBALS['T3Q_VARS']['home_url'].'/'.quickexplorer_div::get_rel_item($dir, $item);
				$target = '_blank';
			} //else $link = '';
			
			//checkbox
			$this->content[]='
				  <tr class="'.$classname.'">
				    <td nowrap="nowrap"><input type="checkbox" name="selitems[]" value="'.$item.'" onclick="javascript:Toggle(this);"></td>';

			//link
			
			$this->content[]='
					<td nowrap="nowrap"><a href="'.$link.'" target="'.$target.'"><img align="absmiddle" border="0" src="'.$imagepath.quickexplorer_div::get_mime_type($dir, $item, 'img').'"width="16" height="16" >&nbsp;'.TYPO3\CMS\Core\Utility\GeneralUtility::fixed_lgd_cs($item,47).'</a></td>
					';


			$this->content[]='
					<td nowrap="nowrap">'.quickexplorer_div::parse_file_size(quickexplorer_div::get_file_size($dir,$item)).'</td>	
					';

			$this->content[]='
					<td nowrap="nowrap">'.quickexplorer_div::get_mime_type($dir, $item, 'type').'</td>	
					';

			$this->content[]='
					<td nowrap="nowrap" >'.quickexplorer_div::parse_file_date(quickexplorer_div::get_file_date($dir,$item)).'</td>	
					';

			$this->content[]='
					<td nowrap="nowrap" >
						<a href="'.quickexplorer_div::make_link('chmod',$dir,$item).'" title="'.$GLOBALS['LANG']->getLL('message.permlink').'">
						'.quickexplorer_div::parse_file_type($dir,$item).quickexplorer_div::parse_file_perms(quickexplorer_div::get_file_perms($dir,$item)).'
						</a>
					</td>
					';
			
			
			
			$this->content[]='
					<td nowrap="nowrap" >
					  <table>
					    <tr>';
			if(quickexplorer_div::get_is_editable($dir, $item)) {
				$this->content[]='
					<td>
					  <a href="'.quickexplorer_div::make_link('edit',$dir,$item).'">
					    <img border="0" align="absmiddle" src="'.$imagepath.'_edit2.gif'.'"width="16" height="16" alt="'.$GLOBALS['LANG']->getLL('message.editlink').'" title="'.$GLOBALS['LANG']->getLL('message.editlink').'">
					  </a>
					</td>
				';
			} else {
				$this->content[]='
					<td>
					  <img border="0" align="absmiddle" src="'.$imagepath.'_noedit2.gif'.'"width="16" height="16" alt="'.$GLOBALS['LANG']->getLL('message.editlink').'" title="'.$GLOBALS['LANG']->getLL('message.editlink').'">
					</td>
				';
			}

			if(quickexplorer_div::get_is_archive($dir,$item)){
				$this->content[]='
					<td>
					<a href="'.quickexplorer_div::make_link('extract',$dir,$item).'">
					    <img border="0" align="absmiddle"  src="'.$imagepath.'_extract.gif'.'"width="16" height="16" alt="'.$GLOBALS['LANG']->getLL('message.extractlink').'" title="'.$GLOBALS['LANG']->getLL('message.extractlink').'">
					</a>
					</td>
					';				
			} else {
				$this->content[]='
					<td>
					  <img border="0" align="absmiddle" src="'.$imagepath.'_noextract.gif'.'"width="16" height="16" alt="'.$GLOBALS['LANG']->getLL('message.extractlink').'" title="'.$GLOBALS['LANG']->getLL('message.extractlink').'">
					</td>
				';
			}


			$this->content[]='
				<td>
				<a href="'.quickexplorer_div::make_link('rename',$dir,$item).'">
				    <img border="0" align="absmiddle"  src="'.$imagepath.'_rename.gif'.'"width="16" height="16" alt="'.$GLOBALS['LANG']->getLL('message.renamelink').'" title="'.$GLOBALS['LANG']->getLL('message.renamelink').'">
				</a>
				</td>
				';

			if(quickexplorer_div::get_is_file($dir,$item)) {
				$this->content[]='
					<td>
					<a href="'.quickexplorer_div::make_link('download',$dir,$item).'">
					    <img border="0" align="absmiddle"  src="'.$imagepath.'_download.gif'.'"width="16" height="16" alt="'.$GLOBALS['LANG']->getLL('message.downlink').'" title="'.$GLOBALS['LANG']->getLL('message.downlink').'">
					</a>
					</td>
					';
			} else {
				$this->content[]='
					<td>
					  <img border="0" align="absmiddle" src="'.$imagepath.'_nodownload.gif'.'" width="16" height="16" alt="'.$GLOBALS['LANG']->getLL('message.downlink').'" title="'.$GLOBALS['LANG']->getLL('message.downlink').'">
					</td>
				';
			}



			$this->content[]='			
					    </tr>  
					  </table>
					</td>
				  </tr>
					';
			
			if($GLOBALS['T3Q_VARS']['show_thumbs'] && quickexplorer_div::get_is_image($dir, $item)){
				$this->content[]='
			  	      <tr class="'.$classname.'">
			  	      	<td>&nbsp;</td>
			  	      	<td nowrap="nowrap"><a href="'.$link.'" target="'.$target.'"><img border="0" align="absmiddle" src="'.$GLOBALS['T3Q_VARS']['home_url'].'/'.quickexplorer_div::get_rel_item($dir, $item).'" width="16" height="16" alt="'.$item.'" title="'.$item.'"></a></td>
			  	      	<td>&nbsp;</td>	
			  	      	<td>&nbsp;</td>
			  	      	<td>&nbsp;</td>
			  	      	<td>&nbsp;</td>
			  	      	<td>&nbsp;</td>
			  	    </tr>  	
						';
			}

			if($classname == 'bgColor-10'){
				$classname = 'bgColor-20';
			} else {
				$classname = 'bgColor-10';
			}

		}
	}
	
	
	function getIsFiles(){
		$files = unserialize(stripslashes($_COOKIE['copymoveitems']));
		return (count($files) && is_array($files));
	}
	
	
	function main($dir,&$pObj){
		global $BACK_PATH;
		$this->iconFactory = TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(IconFactory::class);
		$numfiles = count(unserialize(stripslashes($_COOKIE['copymoveitems'])));

		// JavaScript
		$pObj->doc->JScode = '

				<script language="JavaScript1.2" type="text/javascript">

				<!--

					function Toggle(e) {
						if(e.checked) {
							Highlight(e);
							document.selform.toggleAllC.checked = AllChecked();
						} else {
							UnHighlight(e);
							document.selform.toggleAllC.checked = false;
						}
				   	}
				
					function ToggleAll(e) {
						if(e.checked) CheckAll();
						else ClearAll();
					}
					
					function CheckAll() {
						var ml = document.selform;
						var len = ml.elements.length;
						for(var i=0; i<len; ++i) {
							var e = ml.elements[i];
							if(e.name == "selitems[]") {
								e.checked = true;
								Highlight(e);
							}
						}
						ml.toggleAllC.checked = true;
					}
				
					function ClearAll() {
						var ml = document.selform;
						var len = ml.elements.length;
						for (var i=0; i<len; ++i) {
							var e = ml.elements[i];
							if(e.name == "selitems[]") {
								e.checked = false;
								UnHighlight(e);
							}
						}
						ml.toggleAllC.checked = false;
					}
				   
					function AllChecked() {
						ml = document.selform;
						len = ml.elements.length;
						for(var i=0; i<len; ++i) {
							if(ml.elements[i].name == "selitems[]" && !ml.elements[i].checked) return false;
						}
						return true;
					}
					

					function NumChecked() {
						ml = document.selform;
						len = ml.elements.length;
						num = 0;
						for(var i=0; i<len; ++i) {
							if(ml.elements[i].name == "selitems[]" && ml.elements[i].checked) ++num;
						}
						return num;
					}
					
					
					// Row highlight
				
					function Highlight(e) {
						var r = null;
						if(e.parentNode && e.parentNode.parentNode) {
							r = e.parentNode.parentNode;
						} else if(e.parentElement && e.parentElement.parentElement) {
							r = e.parentElement.parentElement;
						}
						if(r && r.className=="foobar") {
							r.className = "morefoobar";
						}
					}
				
					function UnHighlight(e) {
						var r = null;
						if(e.parentNode && e.parentNode.parentNode) {
							r = e.parentNode.parentNode;
						} else if (e.parentElement && e.parentElement.parentElement) {
							r = e.parentElement.parentElement;
						}
						if(r && r.className=="morefoobar") {
							r.className = "foobar";
						}
					}

					// Copy / Move / Delete
					
					function Copy() {
						if(NumChecked()==0) {
							alert("'.$GLOBALS['LANG']->getLL('error.miscselitems').'");
							return;
						}
						document.selform.do_action.value = "copy";
						document.selform.submit();
					}
					
					function Move() {
						if(NumChecked()==0) {
							alert("'.$GLOBALS['LANG']->getLL('error.miscselitems').'");
							return;
						}
						document.selform.do_action.value = "move";
						document.selform.submit();
					}

					function Paste() {
						num='.$numfiles.';
						if(confirm("'.$GLOBALS['LANG']->getLL('error.miscpasteitems').'")) {
							document.selform.do_action.value = "paste";
							document.selform.submit();
						}
					}

					function Clear() {
						if(confirm("'.$GLOBALS['LANG']->getLL('error.miscclearclipboard').'")) {
							document.selform.do_action.value = "clear";
							document.selform.submit();
						}
					}

					
					function Delete() {
						num=NumChecked();
						if(num==0) {
							alert("'.$GLOBALS['LANG']->getLL('error.miscselitems').'");
							return;
						}
						if(confirm("'.$GLOBALS['LANG']->getLL('error.miscdelitems').'")) {
							document.selform.do_action.value = "delete";
							document.selform.submit();
						}
					}
					
					function Archive() {
						if(NumChecked()==0) {
							alert("'.$GLOBALS['LANG']->getLL('error.miscselitems').'");
							return;
						}
						document.selform.do_action.value = "arch";
						document.selform.submit();
					}
				// -->
				
				</script>
				

			';







		$dir_up = dirname($dir);
		if($dir_up=='.') $dir_up = '';
		if($dir_up=='') $dir_up = ' ';
	
		if(!quickexplorer_div::get_show_item($dir_up,basename($dir))){
			quickexplorer_div::showError($GLOBALS['LANG']->getLL('error.accesdir'));
		}
		if (!file_exists(quickexplorer_div::get_abs_dir($dir))) {
			quickexplorer_div::showError(quickexplorer_div::get_abs_dir($dir).': '.$GLOBALS['LANG']->getLL('error.direxist'));		
			$dir='';
		}

		$this->make_tables($dir);
		$s_dir = TYPO3\CMS\Core\Utility\GeneralUtility::fixed_lgd_cs($dir,47);
		$imagepath = '../'.ExtensionManagementUtility::siteRelPath('quickexplorer').'Resources/Public/Icons/';

		$_img = '&nbsp;<img width="10" height="10" border="0" align="absmiddle" src="'.TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('quickexplorer').'Resources/Public/Icons/';
		
		if($GLOBALS['T3Q_VARS']['srt']=='yes') {
			$_srt = 'no';	
			$_img = '&nbsp;<img align="absmiddle" border="0" src="'.$imagepath.'_arrowup.gif" width="10" height="10"  alt="^">';
		} else {
			$_srt = 'yes';	
			$_img = '&nbsp;<img align="absmiddle" border="0" src="'.$imagepath.'_arrowdown.gif" width="10" height="10"  alt="v">';
		}

		//toolbar start				
		$iconRegistry = TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(TYPO3\CMS\Core\Imaging\IconRegistry::class);
		$this->content[]='
		<br />
		  <table cellpadding="0" cellspacing="0" border="0" width="100%">
		    <tr>
			  <td>
			    <table>
				  <tr>
				    <td>
					  <a href="'.quickexplorer_div::make_link('list',$dir_up,NULL).'" title="'.$GLOBALS['LANG']->getLL('message.uplink').'">'.
						$this->iconFactory->getIcon('_up', Icon::SIZE_SMALL)->render()
						.'
					  </a>
					</td>
					<td>
					  <a href="'.quickexplorer_div::make_link('list',' ',NULL).'">
						<img border="0" align="absmiddle" src="'.$imagepath.'_home.gif" width="16" height="16" alt="'.$GLOBALS['LANG']->getLL('message.homelink').'" title="'.$GLOBALS['LANG']->getLL('message.homelink').'">
					  </a>									
					</td>
					<td>
					  <a href="javascript:location.reload();">
						<img border="0" align="absmiddle" src="'.$imagepath.'_refresh.gif'.'"width="16" height="16" alt="'.$GLOBALS['LANG']->getLL('message.reloadlink').'" title="'.$GLOBALS['LANG']->getLL('message.reloadlink').'">
					  </a>														
					</td>
					<td>
					  <a href="'.quickexplorer_div::make_link('search',$dir,NULL).'">
						<img border="0" align="absmiddle" src="'.$imagepath.'_search.gif'.'"width="16" height="16" alt="'.$GLOBALS['LANG']->getLL('message.searchlink').'" title="'.$GLOBALS['LANG']->getLL('message.searchlink').'">
					  </a>									
					</td>
					<td>::</td>
					<td>
					  <a href="javascript:Copy();">
						<img border="0" align="absmiddle" src="'.$imagepath.'__copy.gif'.'"width="16" height="16" alt="'.$GLOBALS['LANG']->getLL('message.copylink').'" title="'.$GLOBALS['LANG']->getLL('message.copylink').'">
					  </a>									
					</td>
					<td>
					  <a href="javascript:Move();">
						<img border="0" align="absmiddle" src="'.$imagepath.'__cut.gif'.'"width="16" height="16" alt="'.$GLOBALS['LANG']->getLL('message.movelink').'" title="'.$GLOBALS['LANG']->getLL('message.movelink').'">
					  </a>									
					</td>';

			
			if($this->getIsFiles()){
				$this->content[]='
						<td>
						  <a href="javascript:Paste();">
							<img border="0" align="absmiddle" src="'.$imagepath.'__paste.gif'.'"width="16" height="16" alt="'.$GLOBALS['LANG']->getLL('message.pastelink').'" title="'.$GLOBALS['LANG']->getLL('message.pastelink').'">
						  </a>									
						</td>
						<td>
						  <a href="javascript:Clear();">
							<img border="0" align="absmiddle" src="'.$imagepath.'__clear.gif'.'"width="16" height="16" alt="'.$GLOBALS['LANG']->getLL('message.pastelink').'" title="'.$GLOBALS['LANG']->getLL('message.clearlink').'">
						  </a>									
						</td>';

			}
					
			$this->content[]='
					<td>
					  <a href="javascript:Delete();">
						<img border="0" align="absmiddle" src="'.$imagepath.'_delete.gif'.'"width="16" height="16" alt="'.$GLOBALS['LANG']->getLL('message.dellink').'" title="'.$GLOBALS['LANG']->getLL('message.dellink').'">
					  </a>									
					</td>';

		if(get_cfg_var('file_uploads') || ini_get('file_uploads')) {
			$this->content[]='
					<td>
					  <a href="'.quickexplorer_div::make_link('upload',$dir,NULL).'">
						<img border="0" align="absmiddle" src="'.$imagepath.'_upload.gif'.'"width="16" height="16" alt="'.$GLOBALS['LANG']->getLL('message.uploadlink').'" title="'.$GLOBALS['LANG']->getLL('message.uploadlink').'">
					  </a>									
					</td>';
		} else {
			$this->content[]='
					<td>
					  <img border="0" align="absmiddle" src="'.$imagepath.'_upload_.gif'.'"width="16" height="16" alt="'.$GLOBALS['LANG']->getLL('message.uploadlink').'" title="'.$GLOBALS['LANG']->getLL('message.uploadlink').'">
					</td>';		
		}
		$this->content[] = '
					<td>
					  <a href="javascript:Archive();">
						<img border="0" align="absmiddle" src="'.$imagepath.'_archive.gif'.'"width="16" height="16" alt="'.$GLOBALS['LANG']->getLL('message.comprlink').'" title="'.$GLOBALS['LANG']->getLL('message.comprlink').'">
					  </a>									
					</td>
					';
		
		//ADD ADDITIONAL ICONS TO THE TOOLBAR HERE
		
		$this->content[]='
				  </tr>
				</table>
			   </td>';
		$this->content[]='
			   <td align="right">
			     <table>
				   <form action="'.quickexplorer_div::make_link('mkitem',$dir,NULL).'" method="POST">
				     <tr>
					   <td>
		                 <select name="mktype">
						   <option value="file">'.$GLOBALS['LANG']->getLL('mime.file').'</option>
						   <option value="dir">'.$GLOBALS['LANG']->getLL('mime.dir').'</option>
						 </select>
						 <input name="mkname" type="text" size="15">
						 <input type="submit" value="'.$GLOBALS['LANG']->getLL('message.btncreate').'">
	                   </td>
					 </tr>
				   </form>
				 </table>					
			   </td>';
		$this->content[]='			
			 </tr>
		   </table>';
		   
		//toolbar end
		
		
		//$this->content[]= $GLOBALS['LANG']->getLL('message.actdir').': /'.quickexplorer_div::get_rel_item('',$s_dir);		

		
		
		//headers start
/*
		$this->content[]='
		   <table width="100%" cellspacing="0" cellpadding="0" border="0" id="typo3-filelist">
		     <form name="selform" method="POST" action="'.quickexplorer_div::make_link('post',$dir,NULL).'">
			 <input type="hidden" name="do_action">
			 <input type="hidden" name="first" value="y">
		     <tr>
			   <td colspan="7"><br />'.$GLOBALS['LANG']->getLL('message.actdir').': /'.quickexplorer_div::get_rel_item('',$s_dir).'<br /><br /></td>
			 </tr>';
*/

		//08.08.2005 Changed display of path.

		$this->content[]='
		   <table width="100%" cellspacing="0" cellpadding="0" border="0" id="typo3-filelist">
		     <form name="selform" method="POST" action="'.quickexplorer_div::make_link('post',$dir,NULL).'">
			 <input type="hidden" name="do_action">
			 <input type="hidden" name="first" value="y">
		     <tr>
			   <td colspan="7"><br />'.$GLOBALS['LANG']->getLL('message.actdir').': /<input type="text" size="50" name="jumpdir" value="'.quickexplorer_div::get_rel_item('',$s_dir).'">&nbsp;<input type="submit" value="'.$GLOBALS['LANG']->getLL('message.btncd').'" name="jumptodir"><br /><br /></td>
			 </tr>';



		$this->content[]='
			 <tr>
			   <td width="2%" class="c-headLine" nowrap="nowrap">
	             <input type="checkbox" name="toggleAllC" onclick="javascript:ToggleAll(this);">
			   </td>';
			   
		if($GLOBALS['T3Q_VARS']['order']=='name') $new_srt = $_srt;	else $new_srt = 'yes';
		$this->content[]='
			   <td width="44%" class="c-headLine" nowrap="nowrap">
			     <a href="'.quickexplorer_div::make_link('list',$dir,NULL,'name',$new_srt).'">'.$GLOBALS['LANG']->getLL('message.nameheader').($GLOBALS['T3Q_VARS']['order']=="name"? $_img :'').'</a>
			   </td>';

		if($GLOBALS['T3Q_VARS']['order']=='size') $new_srt = $_srt;	else $new_srt = 'yes';
		$this->content[]='
			   <td width="10%" class="c-headLine" nowrap="nowrap">
			     <a href="'.quickexplorer_div::make_link('list',$dir,NULL,'size',$new_srt).'">'.$GLOBALS['LANG']->getLL('message.sizeheader').($GLOBALS['T3Q_VARS']['order']=="size"? $_img :'').'</a>
			   </td>';

		if($GLOBALS['T3Q_VARS']['order']=='type') $new_srt = $_srt;	else $new_srt = 'yes';
		$this->content[]='
			   <td width="16%" class="c-headLine" nowrap="nowrap">
			     <a href="'.quickexplorer_div::make_link('list',$dir,NULL,'type',$new_srt).'">'.$GLOBALS['LANG']->getLL('message.typeheader').($GLOBALS['T3Q_VARS']['order']=="type"? $_img :'').'</a>
			   </td>';

		if($GLOBALS['T3Q_VARS']['order']=='mod') $new_srt = $_srt;	else $new_srt = 'yes';
		$this->content[]='
			   <td width="14%" class="c-headLine" nowrap="nowrap">
			     <a href="'.quickexplorer_div::make_link('list',$dir,NULL,'mod',$new_srt).'">'.$GLOBALS['LANG']->getLL('message.modifheader').($GLOBALS['T3Q_VARS']['order']=="mod"? $_img :'').'</a>
			   </td>';
		$this->content[]='
			   <td width="8%" class="c-headLine" nowrap="nowrap">'.$GLOBALS['LANG']->getLL('message.permheader').'</td>
			   <td width="6%" class="c-headLine" nowrap="nowrap">'.$GLOBALS['LANG']->getLL('message.actionheader').'</td>
			 </tr>
			 <tr>
			   <td colspan="7">&nbsp;</td>
			 </tr>';
			 
		//headers end
				
		$this->print_table($dir,$this->make_list($this->dir_list,$this->file_list),$allow);

		
		if(function_exists('disk_free_space')) {
			$free=quickexplorer_div::parse_file_size(disk_free_space(quickexplorer_div::get_abs_dir($dir)));
		} elseif(function_exists('diskfreespace')) {
			$free=quickexplorer_div::parse_file_size(diskfreespace(quickexplorer_div::get_abs_dir($dir)));
		} else $free='?';

		
		$this->content[]='
			<tr>
			   <td colspan="7">&nbsp;</td>
			 </tr>
			 <tr>
			   <td class="c-headLine"></td>
			   <td class="c-headLine">'.$this->num_items.' '.$GLOBALS['LANG']->getLL('message.miscitems').' ('.$GLOBALS['LANG']->getLL('message.miscfree').': '.$free.')</td>
			   <td class="c-headLine">'.quickexplorer_div::parse_file_size($this->tot_file_size).'</td>
			   <td class="c-headLine"> </td>
			   <td class="c-headLine"> </td>
			   <td class="c-headLine"> </td>
			   <td class="c-headLine"> </td>
			 </tr>
			 <tr>
			   <td colspan="7">&nbsp;</td>
			 </tr>
			 ';

		
		
		$this->content[]='
		     </form>
		   </table>';


		
		return implode('',$this->content);
	}
}
