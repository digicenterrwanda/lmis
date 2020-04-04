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
 * class 'quickexplorer_upload' for the 'quickexplorer' extension.
 * functions for file upload
 *
 * @author	Mads Brunn <brunn@mail.dk>
 */
/***************************************************************

     The Original Code is fun_up.php, released on 2003-04-02.

     The Initial Developer of the Original Code is The QuiX project.
	 
	 quix@free.fr
	 http://www.quix.tk
	 http://quickexplorer.sourceforge.net

****************************************************************/


require_once ("quickexplorer_div.php");


class quickexplorer_upload{
	
	function main($dir) {		

		$this->content=array();
	
		// Execute
		if(TYPO3\CMS\Core\Utility\GeneralUtility::_POST("confirm") && TYPO3\CMS\Core\Utility\GeneralUtility::_POST("confirm")=="true") {
			$basicFileObj = TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\CMS\Core\Utility\File\BasicFileUtility');
			$cnt=count($_FILES['userfile']['name']);

			$err=false;
			$err_avaliable=isset($_FILES['userfile']['error']);
		
			// upload files & check for errors
			for($i=0;$i<$cnt;$i++) {
				$errors[$i]=NULL;
				$tmp = $_FILES['userfile']['tmp_name'][$i];
				$items[$i] = stripslashes($_FILES['userfile']['name'][$i]);
				
				if(TYPO3\CMS\Core\Utility\GeneralUtility::_GP('cleanfilename')){
					$items[$i] = $basicFileObj->cleanFileName($items[$i]);
				}
				
				if($err_avaliable) $up_err = $_FILES['userfile']['error'][$i];
				else $up_err=(file_exists($tmp)?0:4);
				$abs = quickexplorer_div::get_abs_item($dir,$items[$i]);
				if($items[$i]=="" || $up_err==4) continue;
				if($up_err==1 || $up_err==2) {
					$errors[$i]=$GLOBALS['LANG']->getLL("error.miscfilesize");
					$err=true;	continue;
				}
				if($up_err==3) {
					$errors[$i]=$GLOBALS['LANG']->getLL("error.miscfilepart");
					$err=true;	continue;
				}
				if(!@is_uploaded_file($tmp)) {
					$errors[$i]=$GLOBALS['LANG']->getLL("error.uploadfile");
					$err=true;	continue;
				}
				if(@file_exists($abs)) {
					$existaction = TYPO3\CMS\Core\Utility\GeneralUtility::_GP("existaction");
					if($existaction == 'abort'){
						$errors[$i]=$GLOBALS['LANG']->getLL("error.itemdoesexist");
						$err=true;	
						continue;
					} elseif($existaction == 'rename'){
						$abs = $basicFileObj->getUniqueName(basename($abs),dirname($abs));
					}
				}
				
				// Upload
				if(function_exists("move_uploaded_file")) {
					$ok = @move_uploaded_file($tmp, $abs);
				} else {
					$ok = @copy($tmp, $abs);
					@unlink($tmp);	// try to delete...
				}
				
				if($ok===false) {
					$errors[$i]=$GLOBALS['LANG']->getLL("error.uploadfile");
					$err=true;	continue;
				}
			}

			if($err) {			// there were errors
				$err_msg="";
				for($i=0;$i<$cnt;$i++) {
					if($errors[$i]==NULL) continue;
					$err_msg .= $items[$i]." : ".$errors[$i].'<br />';
				}
				quickexplorer_div::showError($err_msg);
			}
			
			header("Location: ".quickexplorer_div::make_link("list",$dir,NULL));
			return;
		}
		
		
		// List
		$this->content[]='
		  <br />
		  <form enctype="multipart/form-data" action="'.quickexplorer_div::make_link("upload",$dir,NULL).'" method="POST">
		    <input type="hidden" name="MAX_FILE_SIZE" value="'.quickexplorer_div::get_max_file_size().'">
			<input type="hidden" name="confirm" value="true">
		  <table>
		  ';
		  
		for($i=1;$i<11;$i++) {
			$this->content[]='
			  <tr>
			    <td nowrap="nowrap">
			      <input name="userfile[]" type="file" size="40">
				</td>
			  </tr>';
		}
		$this->content[]='
		  </table>
		  <br />
		  
		  <table cellspacing="0" cellpadding="0" border="0">
		  	<tr><td><input type="checkbox" name="cleanfilename" checked="checked"></td><td>'.$GLOBALS['LANG']->getLL('message.cleanfilenames').'</td></tr>
		  
		  	<tr>
		  	  <td colspan="2">
		  	  <br />'.$GLOBALS['LANG']->getLL('message.iffilealreadyexists').'
		  	  </td>
          	</tr>
		  	<tr><td><input type="radio" name="existaction" value="rename" checked="checked" /></td><td>'.$GLOBALS['LANG']->getLL('message.iffilealreadyexists.rename').'</td></tr>
          	<tr><td><input type="radio" name="existaction" value="overwrite"  /></td><td>'.$GLOBALS['LANG']->getLL('message.iffilealreadyexists.overwrite').'</td></tr>
		  	<tr><td><input type="radio" name="existaction" value="abort" /></td></td><td>'.$GLOBALS['LANG']->getLL('message.iffilealreadyexists.abort').'</td></tr>
          	
          </table>
          <br />
		  
		  <table>
		    <tr>
			  <td>
			    <input type="submit" value="'.$GLOBALS['LANG']->getLL("message.btnupload").'">
			  </td>
			  <td>
			    <input type="button" value="'.$GLOBALS['LANG']->getLL("message.btncancel").'" onClick="javascript:location=\''.quickexplorer_div::make_link("list",$dir,NULL).'\';">
			  </td>
			</tr>
		  </form>
		  </table>
		  <br />';
		
		return implode("",$this->content);
	}


}
