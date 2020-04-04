<?php
if (!defined ("TYPO3_MODE")) 	die ("Access denied.");
$path=TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY);
if (TYPO3_MODE=="BE")	{
	TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
		"tools",
		"quickexplorer",
		"",
		"",
		array(
			'routeTarget' => Parousia\CMS\Backend\Module\quickExplorer::class.'::mainAction',
			'access' => 'admin',
			'name' => 'tools_quickexplorer',
			'icon' => 'EXT:quickexplorer/Resources/Public/Icons/moduleicon.gif',
			'labels' => 'LLL:EXT:quickexplorer/Resources/Private/Language/locallang_mod.xml',
		)
	);
}
