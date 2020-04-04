<?php

if (!defined ('TYPO3_MODE')) {
 	die ('Access denied.');
}
// Configures the Dispatcher
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'YolfTypo3.' . $_EXTKEY,
    'Default',
    [
        'Default' => 'show',
    ],
    // Non-cachable controller actions
    []
);

// Adds a hook for the query manager
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['queryManagerClass']['savcharts'] = 'EXT:' . $_EXTKEY .
    '/Classes/Hooks/SavChartsQueryManager.php:YolfTypo3\\SavCharts\\Hooks\\SavChartsQueryManager';

?>
