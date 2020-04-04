<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

return array(
    'ctrl' => array(
        'title' => 'LLL:EXT:koning_bootstrap_carousel/Resources/Private/Language/locallang_be.xlf:tx_koningbootstrapcarousel_domain_model_slide',
        'label' => 'title',
        'hideAtCopy' => true,
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'editlock' => 'editlock',
        'dividers2tabs' => true,
        'hideTable' => true,
        'sortby' => 'sorting',
        'delete' => 'deleted',
        'searchFields' => 'uid, title',
        'enablecolumns' => array(
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ),
        'iconfile' => 'EXT:koning_bootstrap_carousel/Resources/Public/Icons/tx_koningbootstrapcarousel_domain_model_slide.gif',
    ),
    'interface' => array(
        'showRecordFieldList' => 'hidden, title, link, link_text, visual, visual_size, visual_position'
    ),
    'types' => array(
        0 => array(
            'showitem' => 'title;;access, link, link_text, visual, visual_size, visual_position'
        )
    ),
    'palettes' => array(
        'access' => array(
            'showitem' => 'hidden, starttime, endtime',
            'canNotCollapse' => false
        )
    ),
    'columns' => array(
        'hidden' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
            'config' => array(
                'type' => 'check',
                'default' => 0
            )
        ),
        'starttime' => Array(
            'exclude' => 1,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.php:LGL.starttime',
            'config' => Array(
                'type' => 'input',
                'size' => '10',
                'max' => '20',
                'eval' => 'datetime',
                'checkbox' => '0',
                'default' => '0'
            )
        ),
        'endtime' => Array(
            'exclude' => 1,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.php:LGL.endtime',
            'config' => Array(
                'type' => 'input',
                'size' => '8',
                'max' => '20',
                'eval' => 'datetime',
                'checkbox' => '0',
                'default' => '0',
                'range' => Array(
                    'upper' => mktime(0, 0, 0, 12, 31, 2020),
                    'lower' => mktime(0, 0, 0, date('m') - 1, date('d'), date('Y'))
                )
            )
        ),
        'title' => array(
            'exclude' => 0,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:koning_bootstrap_carousel/Resources/Private/Language/locallang_be.xlf:tx_koningbootstrapcarousel_domain_model_slide.title',
            'config' => array(
                'type' => 'text',
                'eval' => 'trim, required',
                'size' => 30,
            )
        ),
        'link' => array(
            'exclude' => 0,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:koning_bootstrap_carousel/Resources/Private/Language/locallang_be.xlf:tx_koningbootstrapcarousel_domain_model_slide.link',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
            ),
        ),
        'link_text' => array(
            'exclude' => 0,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:koning_bootstrap_carousel/Resources/Private/Language/locallang_be.xlf:tx_koningbootstrapcarousel_domain_model_slide.link_text',
            'config' => array(
                'type' => 'input',
                'size' => 30,
            )
        ),
        'visual' => array(
            'label' => 'LLL:EXT:koning_bootstrap_carousel/Resources/Private/Language/locallang_be.xlf:tx_koningbootstrapcarousel_domain_model_slide.visual',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'visual',
                array(
                    'appearance' => array(
                        'createNewRelationLinkTitle' => 'LLL:EXT:cms/locallang_ttc.xlf:media.addFileReference'
                    ),
                    'minitems' => 1,
                    'maxitems' => 1,
                ),
                $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
            ),
        ),
        'visual_size' => array(
            'label' => 'LLL:EXT:koning_bootstrap_carousel/Resources/Private/Language/locallang_be.xlf:tx_koningbootstrapcarousel_domain_model_slide.visual_size',
            'config' => array(
                'type' => 'select',
                'items' => array(
                    array('LLL:EXT:koning_bootstrap_carousel/Resources/Private/Language/locallang_be.xlf:tx_koningbootstrapcarousel_domain_model_slide.visual_size.cover', 'cover'),
                    array('LLL:EXT:koning_bootstrap_carousel/Resources/Private/Language/locallang_be.xlf:tx_koningbootstrapcarousel_domain_model_slide.visual_size.contain', 'contain')
                ),
            ),
        ),
        'visual_position' => array(
            'label' => 'LLL:EXT:koning_bootstrap_carousel/Resources/Private/Language/locallang_be.xlf:tx_koningbootstrapcarousel_domain_model_slide.visual_position',
            'config' => array(
                'type' => 'select',
                'items' => array(
                    array('LLL:EXT:koning_bootstrap_carousel/Resources/Private/Language/locallang_be.xlf:tx_koningbootstrapcarousel_domain_model_slide.visual_position.left-top', 'left-top'),
                    array('LLL:EXT:koning_bootstrap_carousel/Resources/Private/Language/locallang_be.xlf:tx_koningbootstrapcarousel_domain_model_slide.visual_position.left-center', 'left-center'),
                    array('LLL:EXT:koning_bootstrap_carousel/Resources/Private/Language/locallang_be.xlf:tx_koningbootstrapcarousel_domain_model_slide.visual_position.left-bottom', 'left-bottom'),
                    array('LLL:EXT:koning_bootstrap_carousel/Resources/Private/Language/locallang_be.xlf:tx_koningbootstrapcarousel_domain_model_slide.visual_position.right-top', 'right-top'),
                    array('LLL:EXT:koning_bootstrap_carousel/Resources/Private/Language/locallang_be.xlf:tx_koningbootstrapcarousel_domain_model_slide.visual_position.right-center', 'right-center'),
                    array('LLL:EXT:koning_bootstrap_carousel/Resources/Private/Language/locallang_be.xlf:tx_koningbootstrapcarousel_domain_model_slide.visual_position.right-bottom', 'right-bottom'),
                    array('LLL:EXT:koning_bootstrap_carousel/Resources/Private/Language/locallang_be.xlf:tx_koningbootstrapcarousel_domain_model_slide.visual_position.center-top', 'center-top'),
                    array('LLL:EXT:koning_bootstrap_carousel/Resources/Private/Language/locallang_be.xlf:tx_koningbootstrapcarousel_domain_model_slide.visual_position.center-center', 'center-center'),
                    array('LLL:EXT:koning_bootstrap_carousel/Resources/Private/Language/locallang_be.xlf:tx_koningbootstrapcarousel_domain_model_slide.visual_position.center-bottom', 'center-bottom'),
                ),
            ),
        ),
    ),
);
