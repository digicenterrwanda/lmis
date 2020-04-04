<?php
namespace YolfTypo3\SavCharts\Controller;

/**
 * Copyright notice
 *
 * (c) 2016 Laurent Foulloy <yolf.typo3@orange.fr>
 *
 * All rights reserved
 *
 * This script is part of the TYPO3 project. The TYPO3 project is
 * free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * The GNU General Public License can be found at
 * http://www.gnu.org/copyleft/gpl.html.
 *
 * This script is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * This copyright notice MUST APPEAR in all copies of the script
 */

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Page\PageRenderer;
use TYPO3\CMS\Core\Messaging\FlashMessage;
use TYPO3\CMS\Extbase\Service\TypoScriptService;
use TYPO3\CMS\Extbase\Utility\LocalizationUtility;
use YolfTypo3\SavCharts\XmlParser\XmlParser;

/**
 * Default Controller
 */
class DefaultController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * Css path
     *
     * @var string
     */
    protected static $cssPath = 'Resources/Public/Styles/SavCharts.css';

    /**
     * js root path
     *
     * @var string
     */
    protected static $javaScriptRootPath = 'Resources/Public/JavaScript';

    /**
     * Query repository
     *
     * @var \YolfTypo3\SavCharts\Domain\Repository\QueryRepository
     * @inject
     */
    protected $queryRepository;

    /**
     * Gets the settings
     *
     * @return array
     */
    public function getSettings()
    {
        return $this->settings;
    }

    /**
     * Gets the query repository
     *
     * @return \YolfTypo3\SavCharts\Domain\Repository\QueryRepository
     */
    public function getQueryRepository()
    {
        return $this->queryRepository;
    }

    /**
     * Gets the content object
     *
     * @return \TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer
     */
    public function getContentObject()
    {
        return $this->configurationManager->getContentObject();
    }

    /**
     * Gets the extension key
     *
     * @return string
     */
    public function getExtensionKey()
    {
        return $this->request->getControllerExtensionKey();
    }

    /**
     * show action
     *
     * @return void
     */
    public function showAction()
    {
        // Gets the extension key
        $extensionKey = $this->getExtensionKey();

        // Creates the xml parser
        $xmlParser = GeneralUtility::makeInstance(XmlParser::class);
        $xmlParser->injectController($this);
        $xmlParser->clearXmlTagResults();

        // Loads the markers and processes them
        $xmlParser->loadXmlString($this->settings['flexform']['xmlMarkersConfig']);
        $xmlParser->parseXml();

        // Sets markers defined by typoscript
        $typoScriptService = GeneralUtility::makeInstance(TypoScriptService::class);
        $typoScriptConfiguration = $typoScriptService->convertPlainArrayToTypoScriptArray($this->getSettings());
        if (is_array($typoScriptConfiguration) && is_array($typoScriptConfiguration['marker.'])) {
            $typoScriptMarkers = $typoScriptConfiguration['marker.'];
            foreach ($typoScriptMarkers as $typoScriptMarkerKey => $typoScriptMarker) {
                if (strpos($typoScriptMarkerKey, '.') === FALSE) {
                    $typoScriptValue = $this->getContentObject()->cObjGetSingle($typoScriptMarker, $typoScriptMarkers[$typoScriptMarkerKey . '.']);
                    $xmlTagObject = XmlParser::getXmlTagObject('marker');
                    $xmlTagObject->setXmlTagId($typoScriptMarkerKey);
                    $xmlTagObject->setXmlTagValue($typoScriptValue);
                    XmlParser::setXmlTagResult('marker', $typoScriptMarkerKey, $xmlTagObject);
                }
            }
        }

        // Loads the queries and processes them
        $xmlParser->loadXmlString($this->settings['flexform']['xmlQueriesConfig']);
        $xmlParser->parseXml();

        // Loads the data and processes them
        $xmlParser->loadXmlString($this->settings['flexform']['xmlDataConfig']);
        $xmlParser->parseXml();

        // Loads the templates and processes them
        $xmlParser->loadXmlString($this->settings['flexform']['xmlTemplatesConfig']);
        $xmlParser->parseXml();

        // Post-processing to get the javascript
        $result = $xmlParser->postProcessing();
        $canvases = $result['canvases'];
        foreach ($canvases as $canvas) {
            $this->addJavaScriptFooterInlineCode($canvas['chartId'], $result['javaScriptFooterInlineCode']);
        }

        // Adds the latest javascript file
        $javaScriptRootDirectory = ExtensionManagementUtility::siteRelPath($extensionKey) . self::$javaScriptRootPath;
        $javaScriptFiles = scandir($javaScriptRootDirectory, SCANDIR_SORT_DESCENDING);
        $javaScriptFooterFile = ExtensionManagementUtility::siteRelPath($extensionKey) . self::$javaScriptRootPath . '/' . $javaScriptFiles[0];
        $this->addJavaScriptFooterFile($javaScriptFooterFile);

        // Adds the css file
        $cssFile = ExtensionManagementUtility::siteRelPath($extensionKey) . self::$cssPath;
        $this->addCascadingStyleSheet($cssFile);

        // Adds the canvases to the view
        $this->view->assign('canvases', $canvases);
    }

    /**
     * Formats a configuration
     *
     * @param string $key
     * @param mixed $value
     *
     * @return string
     */
    protected function formatConfiguration($key, $value)
    {
        if (is_string($value)) {
            $value = '\'' . $value . '\'';
        }
        return $key . ':' . $value;
    }

    /**
     * Adds a javaScript file
     *
     * @param string $javaScriptFileName
     *
     * @return none
     */
    protected function addJavaScriptFooterFile($javaScriptFileName)
    {
        $pageRenderer = GeneralUtility::makeInstance(PageRenderer::class);
        $pageRenderer->addJsFooterFile($javaScriptFileName);
    }

    /**
     * Adds a javaScript inline code
     *
     * @param string $javaScriptFileName
     *
     * @return none
     */
    protected function addJavaScriptFooterInlineCode($key, $javaScriptInlineCode)
    {
        $pageRenderer = GeneralUtility::makeInstance(PageRenderer::class);
        $pageRenderer->addJsFooterInlineCode($key, $javaScriptInlineCode);
    }

    /**
     * Adds a cascading style Sheet
     *
     * @param string $cascadingStyleSheet
     *
     * @return none
     */
    protected function addCascadingStyleSheet($cascadingStyleSheet)
    {
        $pageRenderer = GeneralUtility::makeInstance(PageRenderer::class);
        $pageRenderer->addCssFile($cascadingStyleSheet);
    }

    /**
     * Adds an error to the errors array
     *
     * @param string $key
     *            The message key
     * @param array $arguments
     *            The argument array
     *
     * @return boolean Returns always FALSE so that it can be used in return statements
     */
    public function addError($key, $arguments = NULL)
    {
        // Gets the extension key
        $extensionKey = $this->getExtensionKey();

        // Sets the message
        $message = LocalizationUtility::translate($key, $extensionKey, $arguments);
        if ($message === NULL) {
            $message = $key;
        }

        $this->addFlashMessage($message, '', FlashMessage::ERROR);
        return FALSE;
    }
}
?>

