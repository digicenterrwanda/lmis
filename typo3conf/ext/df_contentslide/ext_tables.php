<?php

if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

// add static extension templates
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
	'df_contentslide', 'Configuration/TypoScript/Default/', 'Content Slide'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
	'df_contentslide', 'Configuration/TypoScript/BodyTagCssClass/', 'Content Slide (Body Tag CSS Class)'
);

?>