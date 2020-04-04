<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

t3lib_extMgm::allowTableOnStandardPages('tx_caleventtemplate_templates');

$TCA['tx_caleventtemplate_templates'] = array (
	'ctrl' => array (
		'title'     => 'LLL:EXT:caleventtemplate/locallang_db.xml:tx_caleventtemplate_templates',		
		'label'     => 'templatetitle',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'default_sortby' => 'ORDER BY crdate',	
		'delete' => 'deleted',	
		'enablecolumns' => array (		
			'disabled' => 'hidden',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icon_tx_caleventtemplate_templates.gif',
	),
);


if (TYPO3_MODE == 'BE') {
	t3lib_extMgm::addModulePath('web_txcaleventtemplateM1', t3lib_extMgm::extPath($_EXTKEY) . 'mod1/');
		
	t3lib_extMgm::addModule('web', 'txcaleventtemplateM1', '', t3lib_extMgm::extPath($_EXTKEY) . 'mod1/');
}


t3lib_div::loadTCA('tt_content');
$TCA['tt_content']['types']['list']['subtypes_excludelist'][$_EXTKEY.'_pi1']='layout,select_key';


t3lib_extMgm::addPlugin(array(
	'LLL:EXT:caleventtemplate/locallang_db.xml:tt_content.list_type_pi1', 
	$_EXTKEY . '_pi1', 
	t3lib_extMgm::extRelPath($_EXTKEY) . 'ext_icon.gif'
), 'list_type');
?>