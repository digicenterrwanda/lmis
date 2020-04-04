<?php
namespace YolfTypo3\SavCharts\XmlParser;

/**
 * Copyright notice
 *
 * (c) 2016 Laurent Foulloy <yolf.typo3@orange.fr>
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
 * This copyright notice MUST APPEAR in all copies of the script!
 */
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use YolfTypo3\SavCharts\Controller\DefaultController;

/**
 * Class xmlGraph
 */
class XmlParser
{

    /**
     * Allowed chart tags
     *
     * @var array
     */
    protected static $allowedChartTags = array(
        'pieChart' => array(
            'type' => 'pie',
            'options' => array()
        ),
        'barChart' => array(
            'type' => 'bar',
            'options' => array(
                'scales' => array(
                    'yAxes' => array(
                        array(
                            'ticks' => array(
                                'beginAtZero' => 1
                            )
                        )
                    )
                )
            )
        ),
        'bubbleChart' => array(
            'type' => 'bubble',
            'options' => array()
        ),
        'doughnutChart' => array(
            'type' => 'doughnut',
            'options' => array()
        ),
        'horizontalBarChart' => array(
            'type' => 'horizontalBar',
            'options' => array(
                'scales' => array(
                    'xAxes' => array(
                        array(
                            'ticks' => array(
                                'beginAtZero' => 1
                            )
                        )
                    )
                )
            )
        ),
        'horizontalStackedBarChart' => array(
            'type' => 'horizontalBar',
            'options' => array(
                'scales' => array(
                    'xAxes' => array(
                        array(
                            'stacked' => TRUE
                        )
                    ),
                    'yAxes' => array(
                        array(
                            'stacked' => TRUE,
                            'ticks' => array(
                                'beginAtZero' => 1
                            )
                        )
                    )
                )
            )
        ),
        'radarChart' => array(
            'type' => 'radar',
            'options' => array()
        ),
        'polarAreaChart' => array(
            'type' => 'polarArea',
            'options' => array(
                'scale' => array(
                    'ticks' => array(
                        'beginAtZero' => 1
                    )
                )
            )
        ),
        'lineChart' => array(
            'type' => 'line',
            'options' => array(
                'scales' => array(
                    'yAxes' => array(
                        array(
                            'ticks' => array(
                                'beginAtZero' => 1
                            )
                        )
                    )
                )
            )
        ),
        'stackedBarChart' => array(
            'type' => 'bar',
            'options' => array(
                'scales' => array(
                    'xAxes' => array(
                        array(
                            'stacked' => TRUE
                        )
                    ),
                    'yAxes' => array(
                        array(
                            'stacked' => TRUE,
                            'ticks' => array(
                                'beginAtZero' => 1
                            )
                        )
                    )
                )
            )
        )
    );

    /**
     * The xml reference
     *
     * @var \SimpleXMLElement
     */
    protected $xml = NULL;

    /**
     * The controller
     *
     * @var \YolfTypo3\SavCharts\Controller\DefaultController
     */
    protected static $controller;

    /**
     * True is the xml was correctly loaded
     *
     * @var boolean
     */
    protected $isLoaded;

    /**
     * The xml tag results
     *
     * @var array
     */
    protected static $xmlTagResults = array();

    /**
     * Injects the controller
     *
     * @param \YolfTypo3\SavCharts\Controller\DefaultController $controller
     *
     * @return none
     */
    public function injectController($controller)
    {
        self::$controller = $controller;
    }

    /**
     * Gets the controller
     *
     * @return \YolfTypo3\SavCharts\Controller\DefaultController $controller
     */
    public static function getController()
    {
        return self::$controller;
    }

    /**
     * Gets a xml tag result
     *
     * @param strin $name
     *            tag name
     * @param mixed $id
     *            id
     * @return array
     */
    public static function getXmlTagResult($name, $id)
    {
        if (isset(self::$xmlTagResults[$name]) && isset(self::$xmlTagResults[$name][$id])) {
            return self::$xmlTagResults[$name][$id];
        }
        return NULL;
    }

    /**
     * Sets a xml tag result
     *
     * @param string $name
     *            tag name
     * @param string $id
     *            id
     * @param mixed $value
     *
     * @return none
     */
    public static function setXmlTagResult($name, $id, $value)
    {
        if ($id === NULL) {
            self::$xmlTagResults[$name][] = $value;
        } else {
            self::$xmlTagResults[$name][$id] = $value;
        }
    }

    /**
     * Clears a xml tag result
     *
     * @param string $name
     *            tag name
     * @param string $id
     *            id
     *
     * @return none
     */
    public static function clearXmlTagResult($name, $id)
    {
        if (isset(self::$xmlTagResults[$name][$id])) {
            unset(self::$xmlTagResults[$name][$id]);
        }
    }

    /**
     * Clears the xml tag results array
     *
     *
     * @return none
     */
    public function clearXmlTagResults()
    {
        self::$xmlTagResults = array();
    }

    /**
     * Gets a reference object
     *
     * @param mixed $reference
     *
     * @return none
     */
    public static function getReferenceObject($reference)
    {
        // Get the tag and the id
        $matches = self::isReference($reference);
        if ($matches !== FALSE) {
            $xmlTag = $matches[1];
            $id = $matches[2];
            $xmlTagResult = XmlParser::getXmlTagResult($xmlTag, $id);
            if ($xmlTagResult === NULL) {
                // The reference is not known yet. Creates a new object.
                $xmlTagObject = self::getXmlTagObject($xmlTag);
                $xmlTagObject->setXmlTagId($id);
                self::setXmlTagResult($xmlTag, $id, $xmlTagObject);
                return $xmlTagObject;
            }
            return $xmlTagResult->getXmlTagValue();
        } else {
            return self::getController()->addError('error.referenceNotWellFormed', array(
                $reference
            ));
        }
    }

    /**
     * Retuns a xml tag object
     *
     * @param string $xmlTag
     *
     * @return \YolfTypo3\SavCharts\XmlParser\GeneralXmlTag\AbstractXmlTag
     */
    public static function getXmlTagObject($xmlTag)
    {
        $className = self::getClassName($xmlTag);
        if ($className === FALSE) {
            return self::getController()->addError('error.unknownClass', array(
                $xmlTag
            ));
        }

        // Creates the xml tag object
        return GeneralUtility::makeInstance($className);
    }

    /**
     * Gets the xml attribute id
     *
     * @param \SimpleXMLElement $element
     *
     * @return string
     */
    public static function getIdAttribute($element)
    {
        $id = (string) $element->attributes()->id;
        if ($id == '') {
            $id = 0;
        }
        if (self::isReference($id)) {
            $id = self::getValueFromReference($id);
        }
        return $id;
    }

    /**
     * Gets the xml attribute overload
     *
     * @param \SimpleXMLElement $element
     *
     * @return string
     */
    public static function getOverloadAttribute($element)
    {
        $overload = (string) $element->attributes()->overload;
        return ! empty($overload);
    }

    /**
     * Gets the xml class name
     *
     * @param string $xmlTag
     *
     * @return string or false
     */
    protected static function getClassName($xmlTag)
    {
        $className = 'YolfTypo3\\SavCharts\\XmlParser\\GeneralXmlTag\\' . ucfirst($xmlTag) . 'XmlTag';
        if (! class_exists($className)) {
            $className = 'YolfTypo3\\SavCharts\\XmlParser\\ChartXmlTag\\' . ucfirst($xmlTag) . 'XmlTag';
        }
        if (class_exists($className)) {
            // Creates the xml tag object
            return $className;
        } else {
            return FALSE;
        }
    }

    /**
     * Loads a xml file
     *
     * @param string $fileName
     *            File name
     *
     * @return none
     */
    public function loadXmlFile($fileName)
    {
        $this->isLoaded = FALSE;

        // Uses XML internal errors
        libxml_use_internal_errors(true);

        // Loads the xml file
        $this->xml = @simplexml_load_file($fileName);

        // Checks if an error is detected
        if ($this->xml === FALSE) {
            $errors = libxml_get_errors();
            // Displays the first error
            self::getController()->addError('error.xmlSyntaxError', array(
                $errors[0]->message,
                $errors[0]->line,
                $fileName
            ));
            return;
        }
        $this->isLoaded = TRUE;
    }

    /**
     * Load a xml string
     *
     * @param string $xmlString
     *            xml string
     *
     * @return none
     */
    public function loadXmlString($xmlString)
    {
        $this->isLoaded = FALSE;

        // Uses XML internal errors
        libxml_use_internal_errors(TRUE);

        // Adds the prologue
        $xmlString = $this->addXmlPrologue($xmlString);

        // Loads the xml string
        $this->xml = @simplexml_load_string($xmlString);

        // Checks if an error is detected
        if ($this->xml === FALSE) {
            $errors = libxml_get_errors();
            // Display the first error
            self::getController()->addError('error.xmlSyntaxError', array(
                $errors[0]->message,
                $errors[0]->line,
                $xmlString
            ));
            return;
        }
        $this->isLoaded = TRUE;
    }

    /**
     * Parses the xml
     *
     * @return none
     */
    public function parseXml()
    {
        // Checks if xml is correclty loaded
        if (! $this->isLoaded) {
            return;
        }

        // Processes the element
        $this->processXmlElement($this->xml);
    }

    /**
     * Processes a xml element
     *
     * @param \SimpleXMLElement $element
     *
     * @return none
     */
    public function processXmlElement($element)
    {
        $xmlTag = (string) $element->getName();
        $xmlTagObject = self::getXmlTagObject($xmlTag);
        if ($xmlTagObject === NULL) {
            return;
        }
        $id = self::getIdAttribute($element);
        $xmlTagObject->setXmlTagId($id);
        $xmlTagObject->setOverload(self::getOverloadAttribute($element));

        if (! count($element->children())) {
            // Calls the default method
            $xmlTagObject->defaultMethod($element);
        } else {
            // Processes the children
            foreach ($element->children() as $child) {
                $childName = (string) $child->getName();
                $className = self::getClassName($childName);
                if ($childName == 'for') {
                    // Calls the default method
                    $xmlForTagObject = self::getXmlTagObject($childName);
                    if ($xmlForTagObject === NULL) {
                        return;
                    }
                    $idFor = self::getIdAttribute($child);
                    $xmlForTagObject->setXmlTagId($idFor);
                    $xmlForTagObject->defaultMethod($child);
                } elseif ($className !== FALSE) {
                    // Processes the class
                    $this->processXmlElement($child);
                } elseif (method_exists($xmlTagObject, $childName)) {
                    // Calls the method if it exists
                    $xmlTagObject->$childName($child);
                } else {
                    return self::getController()->addError('error.unknownXmlTag', array(
                        $childName
                    ));
                }
            }
        }

        // Calls the post processing method if it exists
        if (method_exists($xmlTagObject, 'postProcessingMethod')) {
            $xmlTagObject->postProcessingMethod($element);
        }

        // Sets the xmlTagValues array :
        // - if the tag result is not null but the value is null (this case occurs when a reference is not know yet.
        // An object is created and can now be filled)
        // - if the tag result does not already exist (tag values cannot be overloaded by default)
        // - if the tag result is not null but the overload attribute is set
        if (self::getXmlTagResult($xmlTag, $id) !== NULL && self::getXmlTagResult($xmlTag, $id)->getXmlTagValue() === NULL) {
            self::getXmlTagResult($xmlTag, $id)->setXmlTagValue($xmlTagObject->getXmlTagValue());
        } elseif (self::getXmlTagResult($xmlTag, $id) === NULL) {
            self::setXmlTagResult($xmlTag, $id, $xmlTagObject);
        } elseif (self::getXmlTagResult($xmlTag, $id) !== NULL && self::getXmlTagResult($xmlTag, $id)->getOverload()) {
            $xmlTagValue = self::getXmlTagResult($xmlTag, $id)->getXmlTagValue();
            if (is_array($xmlTagValue)) {
                $xmlTagValue = array_merge($xmlTagValue, $xmlTagObject->getXmlTagValue());
            } else {
                $xmlTagValue = $xmlTagObject->getXmlTagValue();
            }
            self::getXmlTagResult($xmlTag, $id)->setXmlTagValue($xmlTagValue);
        }
    }

    /**
     * Processes subitems of an item element
     *
     * @param \SimpleXMLElement $element
     *
     * @return none
     */
    public function processSubItemElement($element)
    {
        // Processes the children
        $subItem = [];
        foreach ($element->children() as $child) {
            $childName = (string) $child->getName();
            if ($childName === 'item') {

                // Gets the key
                $key = (string) $child->attributes()->key;
                if ($key == '') {
                    return self::getController()->addError('error.missingAttribute', array(
                        'key',
                        'item'
                    ));
                }
                if (self::isReference($key) !== FALSE) {
                    $key = self::getValueFromReference($key);
                }

                // Gets the value
                $attributes = $child->attributes();
                if (isset($attributes['value'])) {
                    $value = (string) $child->attributes()->value;
                    if (self::isReference($value) !== FALSE) {
                        $value = self::getValueFromReference($value);
                    }
                    if (is_numeric($value)) {
                        $value = $value + 0;
                    }
                } elseif (isset($attributes['values'])) {
                    $commaSeparatedValue = XmlParser::replaceSpecialChars($attributes['values']);
                    $processedValues = GeneralUtility::trimExplode(',', $commaSeparatedValue);
                    $value = [];
                    foreach ($processedValues as $processedValueKey => $processedValue) {
                        if (is_numeric($processedValue)) {
                            $processedValue = $processedValue + 0;
                        }
                        $value[$processedValueKey] = $processedValue;
                    }
                } else {
                    if (count($child->children()) > 0) {
                        $value = $this->processSubItemElement($child);
                    } else {
                        $value = (string) $child;
                    }
                }
                $subItem[$key] = $value;
            } else {
                $xmlTagObject = self::getXmlTagObject('data');
                if (method_exists($xmlTagObject, $childName)) {
                    // Calls the method if it exists
                    $xmlTagObject->$childName($child);
                    $value = $xmlTagObject->getXmlTagValue();
                    return $value;
                }
            }
        }

        return $subItem;
    }

    /**
     * Processes a constant
     *
     * @param string $value
     *
     * @return string
     */
    protected function processConstant($value)
    {
        return (defined($value) ? constant($value) : $value);
    }

    /**
     * Post processing
     *
     * @return array
     */
    public function postProcessing()
    {
        // Creates the directory for the csv file
        if (! is_dir('typo3temp/sav_charts')) {
            mkdir('typo3temp/sav_charts');
        }

        // Gets the content uid
        $contentObjectUid = self::$controller->getContentObject()->data['uid'];

        // Resolves reference known by object (it occurs when a reference was
        // not defined when used. An object was created which now contains the
        // reference value)
        foreach (self::$xmlTagResults as $xmlTagKey => $xmlTag) {
            foreach ($xmlTag as $xmlTagResultKey => $xmlTagResult) {
                $xmlTagValue = $xmlTagResult->getXmlTagValue();
                $xmlTagValue = self::ResolveValueByReference($xmlTagValue);
                self::getXmlTagResult($xmlTagKey, $xmlTagResultKey)->setXmlTagValue($xmlTagValue);
            }
        }

        $javaScriptFooterInlineCode = array();
        $result['canvases'] = array();
        $chartCounter = 0;

        // Processes the plugins
        $javaScriptFooterInlineCode[] = 'Chart.plugins.register([';
        if (is_array(self::$xmlTagResults['plugin'])) {
            foreach (self::$xmlTagResults['plugin'] as $xmlTagResultKey => $xmlTagResult) {
                // Gets the xml tag value
                $pluginFileName = $xmlTagResult->getXmlTagValue();
                if (!file_exists($pluginFileName)) {
                    return self::getController()->addError('error.unknownFile', array(
                        $pluginFileName
                    ));
                }
                $javaScriptFooterInlineCode[] = file_get_contents($pluginFileName) . ',';
            }
        }
        $javaScriptFooterInlineCode[] = ']);';


        // Processes the charts
        foreach (self::$xmlTagResults as $xmlTagKey => $xmlTag) {
            if (array_key_exists($xmlTagKey, self::$allowedChartTags)) {

                foreach ($xmlTag as $xmlTagResultKey => $xmlTagResult) {
                    // Sets the chart id
                    $chartId = $contentObjectUid . '_' . $chartCounter;
                    $chartCounter = $chartCounter + 1;

                    // Gets the xml tag value
                    $xmlTagValue = $xmlTagResult->getXmlTagValue();

                    // Gets the data
                    $data = json_encode(self::getValueFromReference($xmlTagValue['data']));

                    // Gets the options
                    if (empty($xmlTagValue['options'])) {
                        $options = self::$allowedChartTags[$xmlTagKey]['options'];
                    } else {
                        $options = array_merge(self::$allowedChartTags[$xmlTagKey]['options'], self::getValueFromReference($xmlTagValue['options']));
                    }
                    if (empty($options)) {
                        $options = '{}';
                    } else {
                        $options = json_encode($options, JSON_FORCE_OBJECT | JSON_NUMERIC_CHECK);

                        // Processes the callbacks if any
                        if (preg_match_all('/"<!--(###)?(.*?)(###)?-->"/', $options, $matches)) {
                            foreach($matches[0] as $matchKey => $match) {
                                if (!empty($matches[1][$matchKey])) {
                                    // The call back is provided by its file name
                                    $callbackFileName = str_replace('\/', '/', $matches[2][$matchKey]);
                                    if (!file_exists($callbackFileName)) {
                                        return self::getController()->addError('error.unknownFile', array(
                                            $callbackFileName
                                        ));
                                    }
                                    $options =str_replace($match, file_get_contents($callbackFileName), $options);
                                } else {
                                    $callback = str_replace(['\n', '\/'], [chr(10), '/'], $matches[2][$matchKey]);
                                    $options =str_replace($match, $callback, $options);
                                }
                            }
                        }
                    }

                    // Creates the javascript
                    $javaScriptFooterInlineCode[] = 'var canvas' . $chartId . ' = document.getElementById(\'canvas' . $chartId . '\').getContext(\'2d\');';
                    $javaScriptFooterInlineCode[] = 'var chart' . $chartId . ' = new Chart(canvas' . $chartId . ', {type:\'' . self::$allowedChartTags[$xmlTagKey]['type'] . '\', data:' . $data . ', options:' . $options . '});';

                    // Adds the csv file if it exists
                    $csvFileName = '';
                    if (isset($xmlTagValue['csv'])) {
                        $csvFileName = 'typo3temp/sav_charts/img_' . $chartId . '.csv';
                        $fileHandle = fopen(PATH_site . $csvFileName, 'w');
                        fwrite($fileHandle, $xmlTagValue['csv']);
                        fclose($fileHandle);
                    }

                    $result['canvases'][] = [
                        'chartId' => $chartId,
                        'width' => $xmlTagValue['width'],
                        'height' => $xmlTagValue['height'],
                        'csvFileName' => $csvFileName
                    ];
                }
            }
        }

        $result['javaScriptFooterInlineCode'] = implode(chr(10), $javaScriptFooterInlineCode);

        return $result;
    }

    /**
     * Resolves the value passed by reference
     *
     * @param mixed $xmlTagValue
     * @return mixed
     */
    public static function ResolveValueByReference($xmlTagValue)
    {
        if (is_array($xmlTagValue)) {
            array_walk_recursive($xmlTagValue, 'self::resolveXmlTagValue');
        } else {
            self::resolveXmlTagValue($xmlTagValue);
        }
        return $xmlTagValue;
    }

    /**
     * Resolves xml tag value when the value is an object
     *
     * @param mixed $value
     * @return none
     */
    protected static function resolveXmlTagValue(&$value)
    {
        if ($value instanceof \YolfTypo3\SavCharts\XmlParser\GeneralXmlTag\AbstractXmlTag) {
            $value = $value->getXmlTagValue();
        }
    }

    /**
     * Processes the query
     *
     * @param string $queryManagerName
     *            The query manager name
     * @param string $uid
     *            Identifier for the query
     * @param array $markers
     *            The markers
     *
     * @return array
     */
    public function processQuery($queryManagerName, $uid, $markers)
    {

        // Gets the class from the hook
        $hookFound = FALSE;
        if (is_array($GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['sav_charts']['queryManagerClass'])) {
            foreach ($GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['sav_charts']['queryManagerClass'] as $key => $classRef) {
                if ($key == $queryManagerName) {
                    $hookObject = GeneralUtility::getUserObj($classRef);
                    $hookObject->injectController(self::$controller);
                    $hookFound = TRUE;
                }
            }
        }

        if ($hookFound === FALSE) {
            self::getController()->addError('error.queryManagerMissing', array(
                $queryManagerName
            ));
            return FALSE;
        }

        // Injects the markers
        $hookObject->injectMarkers($markers);

        // Executes the query
        $rows = $hookObject->executeQuery($uid);

        return $rows;
    }

    /**
     * Adds the xml prologue
     *
     * @param $xmlString string
     *            xml string
     *
     * @return string
     */
    protected function addXmlPrologue($xmlString)
    {
        $out = '<?xml version="1.0" encoding="utf-8"?>
      <charts>
      ' . $xmlString . '
      </charts>';

        return $out;
    }

    /**
     * Checks if a string is a reference
     *
     * @param string $reference
     *
     * @return boolean or array
     */
    public static function isReference($reference)
    {
        if (preg_match('/^(?P<tagName>\w+)#(?P<id>\w+|(?P<idTagName>\w+)#(?P<idId>\w+))(?::(?:(?P<indexNumber>\d+)|(?P<indexWord>value|key)|(?P<indexFor>for)#(?P<indexForId>\w+):(?P<indexForIdIndexWord>key|value))(?:-(?P<endIndexNumber>\d+))?)?$/', $reference, $matches)) {
            return $matches;
        } else {
            return FALSE;
        }
    }

    /**
     * Processes a reference
     *
     * @param string $reference
     *
     * @return string/boolean (return the reference or false)
     */
    public static function getValueFromReference($reference)
    {
        // Get the tag and the id
        $matches = self::isReference($reference);

        if ($matches !== FALSE) {

            if ($matches['idTagName'] && $matches['idId']) {
                $tagName = $matches['idTagName'];
                $id = $matches['idId'];
                $xmlTagResult = XmlParser::getXmlTagResult($tagName, $id);
                if ($xmlTagResult === NULL) {
                    // The reference is not known yet. Creates a new object.
                    $xmlTagObject = self::getXmlTagObject($tagName);
                    $xmlTagObject->setXmlTagId($id);
                    self::setXmlTagResult($tagName, $id, $xmlTagObject);
                    return $xmlTagObject;
                }
                // Processes the reference
                $id = $xmlTagResult->getXmlTagValue();
            } else {
                $id = $matches['id'];
            }
            $tagName = $matches['tagName'];
            $xmlTagResult = XmlParser::getXmlTagResult($tagName, $id);
            if ($xmlTagResult === NULL) {
                // The reference is not known yet. Creates a new object.
                $xmlTagObject = self::getXmlTagObject($tagName);
                $xmlTagObject->setXmlTagId($id);
                self::setXmlTagResult($tagName, $id, $xmlTagObject);
                return $xmlTagObject;
            }
            // Processes the reference
            $xmlTagValue = $xmlTagResult->getXmlTagValue();
            if (isset($matches['endIndexNumber'])) {
                // The reference is a range and an array is returned
                $result = [];
                for ($i = $matches['indexNumber']; $i <= $matches['endIndexNumber']; $i ++) {
                    $result[] = $xmlTagValue[$i];
                }
                return $result;
            } elseif (isset($matches['indexFor'])) {
                // The reference is indexed by a for xml tag key or value.
                $xmlForTagResult = XmlParser::getXmlTagResult('for', $matches['indexForId']);
                if ($xmlForTagResult === NULL) {
                    return self::getController()->addError('error.incorrectReferenceValue', array(
                        'for',
                        $matches['indexForId']
                    ));
                }
                $xmlForTagValue = $xmlForTagResult->getXmlTagValue();
                $index = $xmlForTagValue[$matches['indexForIdIndexWord']];
                return $xmlTagValue[$index];
            } elseif (isset($matches['indexWord']) && $tagName == 'for') {
                // The reference is the curent key or value of a for xml tag.
                $xmlForTagResult = XmlParser::getXmlTagResult('for', $matches['id']);
                if ($xmlForTagResult === NULL) {
                    return self::getController()->addError('error.incorrectReferenceValue', array(
                        'for',
                        $matches['id']
                    ));
                }
                $xmlForTagValue = $xmlForTagResult->getXmlTagValue();
                $index = $matches['indexWord'];
                return $xmlForTagValue[$index];
            } elseif (isset($matches['indexNumber'])) {
                // The reference is indexed by a value
                return $xmlTagValue[$matches['indexNumber']];
            } else {
                return $xmlTagValue;
            }
        } else {
            return self::getController()->addError('error.referenceNotWellFormed', array(
                $reference
            ));
        }
    }

    /**
     * Replaces special characters
     *
     * @param string $data
     *
     * @return string
     */
    public static function replaceSpecialChars($data)
    {
        $data = str_replace('\r', chr(10), $data);
        $data = str_replace('\n', chr(10), $data);
        $data = str_replace('\t', '&nbsp;&nbsp;&nbsp;&nbsp;', $data);

        return $data;
    }
}

?>
