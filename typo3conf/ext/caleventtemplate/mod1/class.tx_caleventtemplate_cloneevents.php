<?php
//require_once (t3lib_extMgm::extPath('cal').'controller/class.tx_cal_registry.php');
	
	/* 
	* @author: Thomas Kowtsch
	*/
	class tx_caleventtemplate_cloneevents {
		
		private $info = '';
		private $pageIDForPlugin;
		private $starttime;
		private $endtime;
		private $extConf;
		
                
		public function __construct() {
			$this->extConf = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['cal']);
		}
		

	}
	
if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/caleventtemplate/mod1/class.tx_caleventtemplate_cloneevents.php']) {
	require_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/caleventtemplate/mod1/class.tx_caleventtemplate_cloneevents.php']);
}

?>
