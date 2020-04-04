<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2010 Thomas Kowtsch <typo3@kowtsch.de>
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
 * [CLASS/FUNCTION INDEX of SCRIPT]
 *
 * Hint: use extdeveval to insert/update function index above.
 */

$GLOBALS['LANG']->includeLLFile('EXT:caleventtemplate/mod1/locallang.xml');
require_once(PATH_t3lib . 'class.t3lib_scbase.php');

require_once (PATH_t3lib.'class.t3lib_scbase.php');
// include this to enable accessing the database via tce
require_once (PATH_t3lib.'class.t3lib_tcemain.php');
require_once (PATH_t3lib.'class.t3lib_loaddbgroup.php');
require_once (PATH_t3lib.'class.t3lib_extfilefunc.php');
$GLOBALS['BE_USER']->modAccess($MCONF, 1);	// This checks permissions and exits if the users has no permission for entry.
	// DEFAULT initialization of a module [END]


/**
 * Module 'Cal templates' for the 'caleventtemplate' extension.
 *
 * @author	Thomas Kowtsch <typo3@kowtsch.de>
 * @package	TYPO3
 * @subpackage	tx_caleventtemplate
 */
class  tx_caleventtemplate_module1 extends t3lib_SCbase {
    private $pageinfo;

    /**
     * Initializes the Module
     * @return	void
     */
    public function init() {
            parent::init();
    }

    /**
     * Adds items to the ->MOD_MENU array. Used for the function menu selector.
     *
     * @return	void
     */
    public function menuConfig() {
            $this->MOD_MENU = Array (
                    'function' => Array (
                            '2' => $GLOBALS['LANG']->getLL('function2'),
                    )
            );
            parent::menuConfig();
    }

    /**
     * Main function of the module. Write the content to $this->content
     * If you chose "web" as main module, you will need to consider the $this->id parameter which will contain the uid-number of the page clicked in the page tree
     *
     * @return	[type]		...
     */
    public function main() {
            // Access check!
            // The page will show only if there is a valid page and if this page may be viewed by the user
            $this->pageinfo = t3lib_BEfunc::readPageAccess($this->id, $this->perms_clause);
            $access = is_array($this->pageinfo) ? 1 : 0;

            if (($this->id && $access) || ($GLOBALS['BE_USER']->user['admin'] && !$this->id))	{
                            // Draw the header.
                    $this->doc = t3lib_div::makeInstance('bigDoc');
                    $this->doc->backPath = $GLOBALS['BACK_PATH'];
                    $this->doc->form='<form action="" method="post" enctype="multipart/form-data">';

                            // JavaScript
                    $this->doc->JScode = '
                            <script language="javascript" type="text/javascript">
                                    script_ended = 0;
                                    function jumpToUrl(URL)	{
                                            document.location = URL;
                                    }
                            </script>
                    ';
                    $this->doc->postCode='
                            <script language="javascript" type="text/javascript">
                                    script_ended = 1;
                                    if (top.fsMod) top.fsMod.recentIds["web"] = 0;
                            </script>
                    ';

                    $headerSection = $this->doc->getHeader('pages', $this->pageinfo, $this->pageinfo['_thePath']).'<br />'.$GLOBALS['LANG']->sL('LLL:EXT:lang/locallang_core.xml:labels.path').': '.t3lib_div::fixed_lgd_cs($this->pageinfo['_thePath'],-50);

                    $this->content.=$this->doc->startPage($GLOBALS['LANG']->getLL('title'));
                    $this->content.=$this->doc->header($GLOBALS['LANG']->getLL('title'));
                    $this->content.=$this->doc->spacer(5);
                    $this->content.=$this->doc->section('', $this->doc->funcMenu($headerSection, t3lib_BEfunc::getFuncMenu($this->id, 'SET[function]', $this->MOD_SETTINGS['function'], $this->MOD_MENU['function'])));
                    $this->content.=$this->doc->divider(5);

                    // Render content:
                    $this->moduleContent();

                    // ShortCut
                    if ($GLOBALS['BE_USER']->mayMakeShortcut())	{
                            $this->content.=$this->doc->spacer(20).$this->doc->section('', $this->doc->makeShortcutIcon('id', implode(',', array_keys($this->MOD_MENU)), $this->MCONF['name']));
                    }

                    $this->content.=$this->doc->spacer(10);
            } else {
                            // If no access or if ID == zero
                    $this->doc = t3lib_div::makeInstance('bigDoc');
                    $this->doc->backPath = $GLOBALS['BACK_PATH'];

                    $this->content.=$this->doc->startPage($GLOBALS['LANG']->getLL('title'));
                    $this->content.=$this->doc->header($GLOBALS['LANG']->getLL('title'));
                    $this->content.=$this->doc->spacer(5);
                    $this->content.=$this->doc->spacer(10);
            }
    }

    /**
     * Prints out the module HTML
     *
     * @return	void
     */
    public function printContent() {
            $this->content.=$this->doc->endPage();
            echo $this->content;
    }

    /**
     * Generates the module content
     *
     * @return	void
     */
    public function moduleContent() {
            switch((string)$this->MOD_SETTINGS['function'])	{
                    case 1:
                            $content='';
                            $this->content.=$this->doc->section('Clone events:', $content,0,1);
                    break;
                    case 2:
                            $extConf = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['cal']);
                            $this->content.='<script type="text/javascript">'.$this->getJScode().'</script>';

            $postVarArray = t3lib_div::_POST();
            $tmplIds = Array();
            foreach($postVarArray as $name => $value){
                    if(strpos($name, 'clone_') === 0){
                            $valueTmplArray = explode('_', $name);
                            $tmplIds[] = intval($valueTmplArray[1]);
                    }
            }

            if (count($tmplIds)>0) {
                    $content.=$GLOBALS['LANG']->getLL('start_clone');

                    foreach ($tmplIds as $tmpl) {
                            $newEventCount = t3lib_div::_POST($tmpl.'_count');
                            if($newEventCount){
                                    $newEventCount = intval($newEventCount);
                            }

                            for ($cnt=1;$cnt<=$newEventCount;$cnt++) {
                                    $newday = t3lib_div::_POST('newday_'.$tmpl.'_'.$cnt);
                                    if($newday){
                                            $newday = intval($newday);
                                    }
                                    $newmonth = t3lib_div::_POST('newmonth_'.$tmpl.'_'.$cnt);
                                    if($newmonth){
                                            $newmonth = intval($newmonth);
                                    }
                                    $newyear = t3lib_div::_POST('newyear_'.$tmpl.'_'.$cnt);
                                    if($newyear){
                                            $newyear = intval($newyear);
                                    }

                                    $newdayend = t3lib_div::_POST('newdayend_'.$tmpl.'_'.$cnt);
                                    if($newdayend){
                                            $newdayend = intval($newdayend);
                                    }
                                    $newmonthend = t3lib_div::_POST('newmonthend_'.$tmpl.'_'.$cnt);
                                    if($newmonthend){
                                            $newmonthend = intval($newmonthend);
                                    }
                                    $newyearend = t3lib_div::_POST('newyearend_'.$tmpl.'_'.$cnt);
                                    if($newyearend){
                                            $newyearend = intval($newyearend);
                                    }

                                    // Do we have a more or less valid date?
                                    if (checkdate($newmonth, $newday, $newyear)){
                                            $where = 'uid='.$tmpl;
                                            // Select event template IDs
                                            $results = $GLOBALS['TYPO3_DB']->exec_SELECTquery('templatebaseevent,storetopid', 'tx_caleventtemplate_templates', $where);
                                            if($results) {
                                                    // Usually, there should be only one record - but who knows...
                                                    while ($row = $GLOBALS['TYPO3_DB']->sql_fetch_assoc($results)){
                                                            $eventId = $row['templatebaseevent'];
                                                            $storetopid = $row['storetopid'];
                                                            if ($storetopid == 0) {
                                                                    $storetopid = -1*$eventId;
                                                            }

                                                            // Duplicate the event record
                                                            $cmd = array();  
                                                            $cmd['tx_cal_event'][''.$eventId.'']['copy'] = $storetopid; 

                                                            $tce = t3lib_div::makeInstance ('t3lib_TCEmain');  
                                                            $tce->start (array(), $cmd);  
                                                            $tce->process_cmdmap ();

                                                            if (count($tce->errorLog) > 0) {
                                                                    // Handle error here
                                                                    $content.=$GLOBALS['LANG']->getLL('tce_copy_error');

                                                            } else {
                                                                    $newEvent=$tce->copyMappingArray['tx_cal_event'][$eventId];
                                                                    $where = 'uid='.$newEvent;
                                                                    $values = array();

                                                                    $newdate = intval(sprintf('%04d%02d%02d', $newyear, $newmonth, $newday));
                                                                    $enddate = intval(sprintf('%04d%02d%02d', $newyearend, $newmonthend, $newdayend));
                                                                    if ($enddate<$newdate || !checkdate($newmonthend, $newdayend, $newyearend)) {
                                                                            $enddate=$newdate;
                                                                    }
                                                                    $values['start_date'] = $newdate;
                                                                    $values['end_date'] = $enddate;
                                                                    $values['hidden'] = 0;

                                                                    $res = $GLOBALS['TYPO3_DB']->exec_UPDATEquery('tx_cal_event', $where, $values);
                                                                    $content.=$GLOBALS['LANG']->getLL('success').$newEvent.'<br />';
                                                            }
                                                    }
                                                    $GLOBALS['TYPO3_DB']->sql_free_result($results);
                                            } else {
                                                    $content.=$GLOBALS['LANG']->getLL('missing_template_uid').'<br />';
                                            }
                                    } else {
                                            $content.=$GLOBALS['LANG']->getLL('missing_date').'<br />';
                                    }
                            }						
                    }
                    $this->content.=$this->doc->section('Event cloning result:', $content,0,1);
            }

            $content='';

            $templates = Array();
            $uids = Array();
            $where = 'pid > 0 AND deleted = 0 AND hidden = 0 ';
            //$where.= 'and tx_caleventtemplate_templates.templatebaseevent = tx_cal_event.uid ';
            $resultso = $GLOBALS['TYPO3_DB']->exec_SELECTquery('uid,templatetitle', 'tx_caleventtemplate_templates', $where, 'uid', 'templatetitle');
            $where = 't1.pid > 0 AND t1.deleted = 0 AND t1.hidden = 0 ';
            $where.= 'and t1.templatebaseevent=t2.uid ';
            $results = $GLOBALS['TYPO3_DB']->exec_SELECTquery('t1.uid,t1.templatetitle,t1.neweventcount, t2.start_time/3600 as stime,t2.start_time as stime2,t2.start_date-t2.end_date as tduration', 'tx_caleventtemplate_templates as t1,tx_cal_event as t2', $where, 'uid', 'templatetitle');

            if($results) {
                    while ($row = $GLOBALS['TYPO3_DB']->sql_fetch_assoc($results)){
                            $templates[] = $row;
                    }
                    $GLOBALS['TYPO3_DB']->sql_free_result($results);
            }
            $content.='<table style="border-width:1px;border-style:solid;margin:2px;">';
            $content.='<tr><td>Event template</td><td>ID</td><td>New date: DD MM YYYY</td><td></td></tr>';
            $globalindex=1000;

            foreach($templates as $templ){

                $content.='<tr><td>';
                $content.=$templ['templatetitle'];

                $content.=' (start '.gmstrftime('%H:%M', $templ['stime2']).')';
                $content.='</td><td>';
                $content.=$templ['uid'];
                $content.='</td><td>';

                if ($templ['neweventcount']<1){
                        $templ['neweventcount'] = 1;
                }
                for ($icnt = $templ['neweventcount']; $icnt>=1; $icnt--){
                        $content.='<input type="hidden" name="'.$templ['uid'].'_count" value="'.$templ['neweventcount'].'">'; 
                        $inputname_day = 'newday_'.$templ['uid'].'_'.$icnt;
                        $inputname_month = 'newmonth_'.$templ['uid'].'_'.$icnt;
                        $inputname_year = 'newyear_'.$templ['uid'].'_'.$icnt;

                        $inputnameend_day = 'newday_'.$templ['uid'];
                        $inputnameend_month = 'newmonth_'.$templ['uid'];
                        $inputnameend_year = 'newyear_'.$templ['uid'];

                        $content.='<input type="text" name="'.$inputname_day.'" onKeyUp="return autoTab(this, 2, event);" size="3" maxlength="2">';
                        $content.='<input type="text" name="'.$inputname_month.'" onKeyUp="return autoTab(this, 2, event);" size="3" maxlength="2">';

                        if ($templ['tduration'] < 0) {
                                $content.='<input type="text" name="'.$inputname_year.'" onKeyUp="return autoTab(this, 4, event);" size="5" maxlength="4">';
                                $content.=' &rArr; ';
                                $content.='<input type="text" name="'.$inputnameend_day.'" onKeyUp="return autoTab(this, 2, event);" size="3" maxlength="2">';
                                $content.='<input type="text" name="'.$inputnameend_month.'" onKeyUp="return autoTab(this, 2, event);" size="3" maxlength="2">';
                                if ($icnt>1) {
                                        $content.='<input type="text" name="'.$inputnameend_year.'" onKeyUp="return autoTwoTab(this, 4, event);" size="5" maxlength="4">';
                                } else {
                                        $content.='<input type="text" name="'.$inputnameend_year.'" onKeyUp="return autoTab(this, 4, event);" size="5" maxlength="4">';
                                }

                        } else {
                                if ($icnt>1) {
                                        $content.='<input type="text" name="'.$inputname_year.'" onKeyUp="return autoTwoTab(this, 4, event);" size="5" maxlength="4">';
                                } else {
                                        $content.='<input type="text" name="'.$inputname_year.'" onKeyUp="return autoTab(this, 4, event);" size="5" maxlength="4">';
                                }


                        }
                        $content.='<br />';
                }
                $content.='</td><td>';
                $content.='<input type="submit" value="'.$GLOBALS['LANG']->getLL('clonenow').'" name="clone_'.$templ['uid'].'">';
                $content.='</td></tr>';
            }
            $content.='</table>';

            $this->content.=$this->doc->section('Clone event to new date:', $content,0,1);
            break;
        }
    }

    private function getJScode() {
            $t3lib_TCEforms = t3lib_div::makeInstance('t3lib_TCEforms');
            $t3lib_TCEforms->backPath = $GLOBALS['BACK_PATH'];
            $ret = $t3lib_TCEforms->dbFileCon();
            $ret.= 'var isNN = (navigator.appName.indexOf("Netscape")!=-1);
function autoTab(input,len, e) {
var keyCode = (isNN) ? e.which : e.keyCode;
var filter = (isNN) ? [0,8,9] : [0,8,9,16,17,18,37,38,39,40,46];
if(input.value.length >= len && !containsElement(filter,keyCode)) {
input.value = input.value.slice(0, len);
input.form[(getIndex(input)+1) % input.form.length].focus();
}
function containsElement(arr, ele) {
var found = false, index = 0;
while(!found && index < arr.length)
if(arr[index] == ele)
found = true;
else
index++;
return found;
}
function getIndex(input) {
var index = -1, i = 0, found = false;
while (i < input.form.length && index == -1)
if (input.form[i] == input)index = i;
else i++;
return index;
}
return true;
}
function autoTwoTab(input,len, e) {
var keyCode = (isNN) ? e.which : e.keyCode;
var filter = (isNN) ? [0,8,9] : [0,8,9,16,17,18,37,38,39,40,46];
if(input.value.length >= len && !containsElement(filter,keyCode)) {
input.value = input.value.slice(0, len);
input.form[(getIndex(input)+2) % input.form.length].focus();
}
function containsElement(arr, ele) {
var found = false, index = 0;
while(!found && index < arr.length)
if(arr[index] == ele)
found = true;
else
index++;
return found;
}
function getIndex(input) {
var index = -1, i = 0, found = false;
while (i < input.form.length && index == -1)
if (input.form[i] == input)index = i;
else i++;
return index;
}
return true;
}
';
            return $ret; 
    }

}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/caleventtemplate/mod1/index.php'])	{
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/caleventtemplate/mod1/index.php']);
}
// Make instance:
$SOBE = t3lib_div::makeInstance('tx_caleventtemplate_module1');
$SOBE->init();

// Include files?
foreach($SOBE->include_once as $INC_FILE)	include_once($INC_FILE);

$SOBE->main();
$SOBE->printContent();

?>
