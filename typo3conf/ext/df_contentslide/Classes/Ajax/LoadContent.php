<?php

namespace SGalinski\dfContentslide\Ajax;

/***************************************************************
 *  Copyright notice
 *
 *  (c) sgalinski Internet Services
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

use SGalinski\ContentReplacer\Controller\MainController;
use TYPO3\CMS\Core\Database\DatabaseConnection;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Frontend\Controller\TypoScriptFrontendController;
use TYPO3\CMS\Frontend\Utility\EidUtility;

if (!defined('PATH_typo3conf')) {
	die('Could not access this script directly!');
}

/**
 * Loads and renders the bodytext from a given record id with all required
 * transformations. Note that the class does not require a valid page and
 * always assumes zero as page id value.
 */
class LoadContent {
	/**
	 * @var string
	 */
	protected $content = '';

	/**
	 * @var \TYPO3\CMS\Fluid\View\StandaloneView
	 */
	protected $view;

	/**
	 * Controlling method
	 *
	 * @return void
	 */
	public function main() {
		$this->initTSFE();

		$parameters = GeneralUtility::_GP('df_contentslide');
		$this->objectManager = $objectManager = GeneralUtility::makeInstance('TYPO3\CMS\Extbase\Object\ObjectManager');
		$this->view = $this->objectManager->get('TYPO3\CMS\Fluid\View\StandaloneView');
		$this->initializeView();

		$content = $this->getContentByRecordId($parameters['id']);

		if (ExtensionManagementUtility::isLoaded('content_replacer')) {
			/** @var $contentReplacer MainController */
			$contentReplacer = GeneralUtility::makeInstance(MainController::class);
			$content['bodytext'] = $contentReplacer->main($content['bodytext']);
		}

		$content['header_layout'] = 100;
		$content['tx_df_contentslide_contentslide'] = 0;

		$this->view->assign('data', $content);
		$this->content = $this->view->render();
	}

	/**
	 * Init the standalone view template
	 */
	protected function initializeView() {
		// initialize the Fluid header-partial
		$this->view->setTemplatePathAndFilename(
			GeneralUtility::getFileAbsFileName('EXT:df_contentslide/Resources/Private/Templates/AjaxContent.html')
		);
	}

	/**
	 * Prints the content
	 *
	 * @return void
	 */
	public function printContent() {
		header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');
		header('Cache-Control: no-store, no-cache, must-revalidate');
		header('Cache-Control: post-check=0, pre-check=0', FALSE);
		header('Pragma: no-cache');

		echo '<div class="dfcontentslide-content">
			<div class="dfcontentslide-contentSub">' . GeneralUtility::removeXSS($this->content) . '</div>
		</div>';
	}

	/**
	 * Initializes the TSFE object
	 *
	 * @return void
	 */
	protected function initTSFE() {
		if (!is_object($GLOBALS['TSFE'])) {
			EidUtility::initTCA();
			/** @var TypoScriptFrontendController $tsfe */
			$tsfe = $GLOBALS['TSFE'] = GeneralUtility::makeInstance(
				TypoScriptFrontendController::class, $GLOBALS['TYPO3_CONF_VARS'], 0, 0, TRUE
			);
			$tsfe->initFEuser();
			$tsfe->fetch_the_id();
			$tsfe->getPageAndRootline();
			$tsfe->initTemplate();
			$tsfe->forceTemplateParsing = 1;
			$tsfe->getConfigArray();
			$tsfe->newCObj();
		}
	}

	/**
	 * Returns the bodytext of the record identified by the given uid
	 *
	 * @param int $id
	 * @return string
	 */
	protected function getContentByRecordId($id) {
		/** @var $db DatabaseConnection */
		$enableFields = $GLOBALS['TSFE']->sys_page->enableFields('tt_content');
		$db = $GLOBALS['TYPO3_DB'];
		$row = $db->exec_SELECTgetSingleRow(
			'*',
			'tt_content',
			'uid = ' . intval($id) . $enableFields
		);

		return $row;
	}

}

/** @var $object LoadContent */
$object = GeneralUtility::makeInstance('SGalinski\dfContentslide\Ajax\LoadContent');
$object->main();
$object->printContent();

?>
