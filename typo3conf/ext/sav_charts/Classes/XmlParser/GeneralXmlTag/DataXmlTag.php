<?php
namespace YolfTypo3\SavCharts\XmlParser\GeneralXmlTag;

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
use YolfTypo3\SavCharts\XmlParser\XmlParser;

/**
 * Class file
 *
 * This class is used to define <file> </file> in xml code
 */
class DataXmlTag extends AbstractXmlTag
{

    /**
     * Default method
     *
     * @param \SimpleXMLElement $element
     *
     * @return none
     */
    public function defaultMethod($element)
    {
        $values = (string) $element;
        $child = $element->addChild('setData');
        $child->addAttribute('values', $values);
        $this->setData($child);
    }

    /**
     * Sets the data.
     * Data are in a comma-separated string
     *
     * @param \SimpleXMLElement $element
     *
     * @return none
     */
    public function setData($element)
    {
        // Gets the element name
        $elementName = (string) $element->getName();

        // Gets the attribute
        $values = (string) $element->attributes()->values;
        if ($values == '') {
            return  XmlParser::getController()->addError('error.missingAttribute', array(
                'values',
                $elementName
            ));
        }

        // Checks if the values are a reference
        if ( XmlParser::isReference($values)) {
            $this->xmlTagValue = XmlParser::getValueFromReference($values);
        } else {
            $values = XmlParser::replaceSpecialChars($values);
            $this->xmlTagValue = GeneralUtility::trimExplode(',', $values);
            foreach($this->xmlTagValue as $key => $value) {
                if(is_numeric($value)) {
                    $this->xmlTagValue[$key] = $value + 0;
                }
            }
        }
    }

    /**
     * Sets an item in the data.
     * Data are in a comma-separated string
     *
     * @param \SimpleXMLElement $element
     *
     * @return none
     */
    public function item($element)
    {
        // Gets the element name
        $elementName = (string) $element->getName();

        // Gets the key
        $key = (string) $element->attributes()->key;
        if ($key == '') {
            return  XmlParser::getController()->addError('error.missingAttribute', array(
                'key',
                $elementName
            ));
        }
        if ( XmlParser::isReference($key) !== FALSE) {
            $key = XmlParser::getValueFromReference($key);
        }

        // Checks if there is a values attribute.
        // It is assumed that it is a comma-separated list
        $commaSeparatedValue = (string) $element->attributes()->values;
        if (!empty($commaSeparatedValue)) {
            $commaSeparatedValue = XmlParser::replaceSpecialChars($commaSeparatedValue);
            $values = GeneralUtility::trimExplode(',', $commaSeparatedValue);
            $this->xmlTagValue[$key] = array();
            foreach($values as $valueKey => $value) {
                if(is_numeric($value)) {
                    $this->xmlTagValue[$key][$valueKey] = $value + 0;
                }
            }
            return;
        }

        // Checks if there is a value
        $value = (string) $element->attributes()->value;

        if (empty($value)) {
            if (! count($element->children())) {
                // No children found, returns the element
                $this->xmlTagValue[$key] = XmlParser::replaceSpecialChars((string) $element);
            } else {
                $this->xmlTagValue[$key] = $this->xmlParser->processSubItemElement($element);
            }
        } else {
            if ( XmlParser::isReference($value) !== FALSE) {
                $value = XmlParser::getValueFromReference($value);
            }
            $this->xmlTagValue[$key] = $value;
        }
    }

    /**
     * Sets the data from a query
     * Data are in an array
     *
     * @param \SimpleXMLElement $element
     *
     * @return none
     */
    public function setDataFromQuery($element)
    {
        // Checks if the queries are allowed
        $settings =  XmlParser::getController()->getSettings();
        if (empty($settings['flexform']['allowQueries'])) {
            return XmlParser::getController()->addError('error.queriesMustBeAllowed', array(
                'SetDataFromQuery'
            ));
        }

        // Gets the element name
        $elementName = (string) $element->getName();

        // Checks if there is a query id
        $query = (string) $element->attributes()->query;
        if (empty($query)) {
            return  XmlParser::getController()->addError('error.missingAttribute', array(
                'query',
                $elementName
            ));
        }
        if (XmlParser::isReference($query) !== FALSE) {
            $query = XmlParser::getValueFromReference($query);
        }

        // Sets query reference
        $queryReference = 'query#' . $query;
        if (!is_scalar($query) || XmlParser::isReference($queryReference) === FALSE) {
            return  XmlParser::getController()->addError('error.incorrectReferenceValue', array(
                'query',
                $query
            ));
        }

        // Checks if there is a field attribute
        $field = (string) $element->attributes()->field;
        if (empty($field)) {
            return  XmlParser::getController()->addError('error.missingAttribute', array(
                'field',
                $elementName
            ));
        }

        // Checks if there is a groupby attribute
        $groupby =  (string) $element->attributes()->groupby;
        if (!empty($groupby)) {
            if ( XmlParser::isReference($groupby) !== FALSE) {
                $groupby = count(XmlParser::getValueFromReference($groupby));
            }
        }

        // Gets the query result
        $xmlTagValue = XmlParser::getValueFromReference($queryReference);
        $counter = 0;
        foreach ($xmlTagValue as $key => $values) {
            $value = $values[$field];
            if (is_numeric($value)) {
                $value = $value + 0;
            }
            if ($groupby != 0) {
                $this->xmlTagValue[$counter/$groupby][$counter%$groupby] = $value;
                $counter++;
            } else {
                $this->xmlTagValue[$key] = $value;
            }
        }
    }


    /**
     * Sets the data from a query row
     *
     * @param \SimpleXMLElement $element
     *
     * @return none
     */
    public function setDataFromQueryRow($element)
    {
        // Checks if the queries are allowed
        $settings =  XmlParser::getController()->getSettings();
        if (empty($settings['flexform']['allowQueries'])) {
            return XmlParser::getController()->addError('error.queriesMustBeAllowed', array(
                'SetDataFromQuery'
            ));
        }

        // Gets the element name
        $elementName = (string) $element->getName();

        // Checks if there is a query id
        $query = (string) $element->attributes()->query;
        if (empty($query)) {
            return  XmlParser::getController()->addError('error.missingAttribute', array(
                'query',
                $elementName
            ));
        }
        if (XmlParser::isReference($query) !== FALSE) {
            $query = XmlParser::getValueFromReference($query);
        }

        // Sets query reference
        $queryReference = 'query#' . $query;
        if (!is_scalar($query) || XmlParser::isReference($queryReference) === FALSE) {
            return  XmlParser::getController()->addError('error.incorrectReferenceValue', array(
                'query',
                $query
            ));
        }

        // Checks if there is a fields attribute
        $fields = (string) $element->attributes()->fields;
        if (empty($fields)) {
            return  XmlParser::getController()->addError('error.missingAttribute', array(
                'fields',
                $elementName
            ));
        }

        // Gets the query result
        $fieldsArray = explode(',', $fields);
        $counter = 0;
        $xmlTagValue = XmlParser::getValueFromReference($queryReference);
        foreach($fieldsArray as $field) {
            if (isset($xmlTagValue[0][trim($field)])) {
                $value = $xmlTagValue[0][trim($field)];
                if (is_numeric($value)) {
                    $value = $value + 0;
                }
                $this->xmlTagValue[$counter++] = $value;
            }
        }
    }

    /**
     * Reorganizes the data by index.
     *
     * @param \SimpleXMLElement $element
     *
     * @return none
     */
    public function reorganizeByIndex($element)
    {
        // Checks if there is a key
        $mainKey = (string) $element->attributes()->key;
        if (XmlParser::isReference($mainKey) !== FALSE) {
            $mainKey = XmlParser::getValueFromReference($mainKey);
        }

        $xmlTagValue = $this->xmlTagValue;
        unset($this->xmlTagValue);
        foreach ($xmlTagValue as $key => $values) {
            foreach ($values as $index => $value) {
                if (!empty($mainKey)) {
                    if(isset($xmlTagValue[$mainKey][$index])) {
                        $this->xmlTagValue[$index][$key] = $value;
                    } else {
                        continue;
                    }
                } else {
                    $this->xmlTagValue[$index][$key] = $value;
                }
            }
        }
    }

    /**
     * Changes the data to percentage
     *
     * @param \SimpleXMLElement $element
     *
     * @return none
     */
    public function changeToPercentage($element)
    {
        // Gets the precision
        $precision = (string) $element->attributes()->precision;
        if (empty($precision)) {
            $precision = 1;
        }
        if (XmlParser::isReference($precision) !== FALSE) {
            $precision = XmlParser::getValueFromReference($precision);
        }

        // Computes the sum
        $sum = array();
        foreach($this->xmlTagValue as $dataKey => $data) {
            if (is_array($data)) {
                foreach($data as $key => $value) {
                    $sum[$dataKey] += $value;
                }
            } else {
                $sum[0] += $data;
            }
        }

        foreach($this->xmlTagValue as $dataKey => $data) {
            if (is_array($data)) {
                foreach($data as $key => $value) {
                    $this->xmlTagValue[$dataKey][$key] = round(100 * $this->xmlTagValue[$dataKey][$key] / $sum[$dataKey], $precision);
                }
            } else {
                $this->xmlTagValue[$dataKey] = round(100 * $this->xmlTagValue[$dataKey] / $sum[0], $precision);
            }
        }
    }

    /**
     * Processes callback
     *
     * @param \SimpleXMLElement $element
     *
     * @return none
     */
    public function callback($element)
    {
        // Gets the element name
        $elementName = (string) $element->getName();

        // Gets the key
        $key = (string) $element->attributes()->key;
        if ($key == '') {
            return  XmlParser::getController()->addError('error.missingAttribute', array(
                'key',
                $elementName
            ));
        }

        // Creates a DOM document to get the comment
        $document = new \DOMDocument;
        $document->loadXML($element->asXML());
        $xpath = new \DOMXPath($document);
        $text = $xpath->query('/callback/comment()')->item(0)->textContent;

        if (empty($text)) {
            $text = '###' .  trim((string) $element) . '###';
        }

        $this->xmlTagValue[$key] = '<!--' . $text . '-->';
    }
}

?>
