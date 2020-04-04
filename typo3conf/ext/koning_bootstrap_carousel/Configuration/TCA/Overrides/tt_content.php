<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'koning_bootstrap_carousel',
    'Show',
    'LLL:EXT:koning_bootstrap_carousel/Resources/Private/Language/locallang_be.xlf:plugin.title'
);

$temporaryColumns = array(
    'koningbootstrapcarousel_slides' => array(
        'exclude' => 1,
        'l10n_mode' => 'mergeIfNotBlank',
        'label' => 'LLL:EXT:koning_bootstrap_carousel/Resources/Private/Language/locallang_be.xlf:tt_content.koningbootstrapcarousel_slides',
        'config' => array(
            'type' => 'inline',
            'foreign_table' => 'tx_koningbootstrapcarousel_domain_model_slide',
            'foreign_field' => 'content_id',
            'foreign_sortby' => 'sorting',
            'maxitems' => '9999',
            'appearance' => array(
                'collapseAll' => true,
                'expandSingle' => true,
                'useSortable' => true,
                'enabledControls' => true,
                'createNewRelationLinkTitle' => 'LLL:EXT:cms/locallang_ttc.xlf:media.addFileReference',
                'newRecordLinkAddTitle' => true,
                'levelLinksPosition' => 'top',
                'showSynchronizationLink' => false,
                'showAllLocalizationLink' => true,
                'showPossibleLocalizationRecords' => true,
                'showRemovedLocalizationRecords' => true,
            )
        ),
    ),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $temporaryColumns);

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist']['koningbootstrapcarousel_show'] = 'layout, select_key, pages';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['koningbootstrapcarousel_show'] = 'pi_flexform, koningbootstrapcarousel_slides';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    'koningbootstrapcarousel_show',
    'FILE:EXT:koning_bootstrap_carousel/Configuration/FlexForm/Show.xml'
);
