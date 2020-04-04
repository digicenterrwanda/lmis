<?php

namespace SGalinski\dfContentslide\ViewHelpers;

/***************************************************************
 *  Copyright notice
 *
 *  (c) sgalinski Internet Services (https://www.sgalinski.de)
 *
 *  All rights reserved
 *
 *  This script is part of the AY project. The AY project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
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

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Fluid\Core\ViewHelper\AbstractTagBasedViewHelper;

class ContentSlideWrapperViewHelper extends AbstractTagBasedViewHelper {

	/**
	 * @var \TYPO3\CMS\Fluid\View\StandaloneView
	 */
	protected $view;

	/**
	 * The content-element data-array
	 *
	 * @var array
	 */
	protected $contentElementData = [];

	public function __construct() {
		parent::__construct();
		$this->objectManager = $objectManager = GeneralUtility::makeInstance('TYPO3\CMS\Extbase\Object\ObjectManager');
		$this->view = $this->objectManager->get('TYPO3\CMS\Fluid\View\StandaloneView');
		$this->initializeView();
	}

	/**
	 * Init the standalone view template
	 */
	protected function initializeView() {
		// initialize the Fluid header-partial
		$this->view->setTemplatePathAndFilename(
			GeneralUtility::getFileAbsFileName($GLOBALS['TSFE']->tmpl->setup['plugin.']['tx_df_contentslide.']['settings.']['headerViewHelper'])
		);
	}

	/**
	 * @param array $contentElementData The content-element data-array
	 * @param string $class Additional class names
	 * @return string
	 */
	public function render(array $contentElementData, $class = '') {
		$this->contentElementData = $contentElementData;
		$content = $this->renderChildren();
		if (!$contentElementData['tx_df_contentslide_contentslide']) {
			return $content;
		}

		$this->tag->addAttribute('class', $this->getClassName($class));
		$this->tag->addAttribute('data-dfcontentslide-animation', $contentElementData['tx_df_contentslide_animation']);
		$this->tag->setContent($this->getContentWrapper($content));

		return $this->tag->render();
	}

	/**
	 * @param string $class
	 * @return string
	 */
	private function getClassName($class) {
		$className = 'dfcontentslide-wrap';
		$className .= ' dfcontentslide-' . $this->contentElementData['tx_df_contentslide_layout'] . ' ' . $class;
		if ((int) $this->contentElementData['tx_df_contentslide_options'] === 2 || (int) $this->contentElementData['tx_df_contentslide_options'] === 3) {
			$className .= ' dfcontentslide-open ';
		}
		return $className;
	}

	/**
	 * Creates the contentslide-wrapper with all needed options
	 *
	 * @param string $content
	 * @return string
	 */
	private function getContentWrapper($content) {
		$wrappedContent = $this->getToggle();
		if ((int) $this->contentElementData['tx_df_contentslide_options'] !== 1 && (int) $this->contentElementData['tx_df_contentslide_options'] !== 3) {
			$wrappedContent .= '<div class="dfcontentslide-content"><div class="dfcontentslide-contentSub">';
			$wrappedContent .= $content;
			$wrappedContent .= '</div></div>';
		}

		return $wrappedContent;
	}

	/**
	 * Creates the contentslide-toggle, based on the element's header
	 *
	 * @return string
	 */
	private function getToggle() {
		// fall back to default header if none is set
		$headerText = $this->contentElementData['header'] ? $this->contentElementData['header'] : $GLOBALS['TSFE']->tmpl->setup['plugin.']['tx_df_contentslide.']['settings.']['emptyHeaderText'];
		$this->view->assign('layout', $this->contentElementData['header_layout']);
		$this->view->assign('header', $headerText);
		$this->view->assign('link', '#acc' . $this->contentElementData['uid']);
		return '<div class="dfcontentslide-toggle">' . $this->view->render() . '</div>';
	}
}
