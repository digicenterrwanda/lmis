<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

$TCA['tx_caleventtemplate_templates'] = array (
	'ctrl' => $TCA['tx_caleventtemplate_templates']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'hidden,templatetitle,templatebaseevent,storetopid'
	),
	'feInterface' => $TCA['tx_caleventtemplate_templates']['feInterface'],
	'columns' => array (
		'hidden' => array (		
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array (
				'type'    => 'check',
				'default' => '0'
			)
		),
		'templatetitle' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:caleventtemplate/locallang_db.xml:tx_caleventtemplate_templates.templatetitle',		
			'config' => array (
				'type' => 'input',	
				'size' => '30',	
				'max' => '90',	
				'eval' => 'trim,required',
			)
		),
		'neweventcount' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:caleventtemplate/locallang_db.xml:tx_caleventtemplate_templates.neweventcount',		
			'config' => array (
				'type'     => 'input',
				'size'     => '4',
				'max'      => '4',
				'eval'     => 'int',
				'checkbox' => '0',
				'range'    => array (
					'upper' => '7',
					'lower' => '1'
				),
				'default' => 0
			)
		),
		'templatebaseevent' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:caleventtemplate/locallang_db.xml:tx_caleventtemplate_templates.templatebaseevent',		
			'config' => array (
				'type' => 'select',	
				'foreign_table' => 'tx_cal_event',	
				'foreign_table_where' => 'ORDER BY tx_cal_event.start_date',	
				'size' => 1,	
				'minitems' => 0,
				'maxitems' => 1,
				'eval' => 'required',				
			)
		),
		'storetopid' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:caleventtemplate/locallang_db.xml:tx_caleventtemplate_templates.storetopid',		
			'config' => array (
				'type'     => 'input',
				'size'     => '4',
				'max'      => '4',
				'eval'     => 'int',
				'checkbox' => '0',
				'range'    => array (
					'upper' => '100000',
					'lower' => '0'
				),
				'default' => 0
			)
		),
	),
	'types' => array (
		'0' => array('showitem' => 'hidden;;1;;1-1-1, templatetitle, templatebaseevent, neweventcount, storetopid'),

	),
	'palettes' => array (
		'1' => array('showitem' => '')
	)
);
?>