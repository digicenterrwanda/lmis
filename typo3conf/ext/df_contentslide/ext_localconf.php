<?php

if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

$GLOBALS['TYPO3_CONF_VARS']['FE']['eID_include']['dfcontentslide'] =
	'EXT:df_contentslide/Classes/Ajax/LoadContent.php';

?>