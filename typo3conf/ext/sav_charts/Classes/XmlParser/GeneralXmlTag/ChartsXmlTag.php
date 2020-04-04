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
use YolfTypo3\SavCharts\XmlParser\XmlParser;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * Class for Charts
 *
 * This class is used to define <charts> </charts> in xml code
 */
class ChartsXmlTag extends AbstractXmlTag
{

    /**
     * Adds an item to a data array
     *
     * @param \SimpleXMLElement $element
     *
     * @return none
     */
    public function addItem($element)
    {
        // Gets the element name
        $elementName = (string) $element->getName();

        // Checks if there is a reference
        $reference = (string) $element->attributes()->reference;
        if (empty($reference)) {
            return XmlParser::getController()->addError('error.missingAttribute', array('reference', $elementName));
        }

        // Checks if there is a key
        $key = (string) $element->attributes()->key;
        if ($key == '') {
            return XmlParser::getController()->addError('error.missingAttribute', array('key', $elementName));
        }
        if (XmlParser::isReference($key) !== FALSE) {
            $key = XmlParser::getValueFromReference($key);
        }

        // Checks if there is a value
        $value = (string) $element->attributes()->value;
        if ($value == '') {
            if ((string) $element == '') {
                return XmlParser::getController()->addError('error.missingAttribute', array('value', $elementName));
            } else {
                $value = (string) $element;
            }
        } elseif (XmlParser::isReference($value) !== FALSE) {
            $value = XmlParser::getValueFromReference($value);
        }

        // Gets the reference parts
        $referenceParts = explode('#', $reference);
        $xmlTag = $referenceParts[0];
        $id =  $referenceParts[1];

        // Performs the change in the xml tag results array
        $xmlTagResult = XmlParser::getXmlTagResult($xmlTag, $id);
        if ($xmlTagResult  === NULL) {
            return XmlParser::getController()->addError('error.incorrectReferenceValue', array($xmlTag, $id));
        }

        // Gets the xml tag value
        $xmlTagValue = $xmlTagResult->getXmlTagValue();

        // Adds the item
        $xmlTagValue[$key] = $value;

        // Updates the xml tag result
        $xmlTagResult->setXmlTagValue($xmlTagValue);
    }

    /**
     * Sets a new id to an element with a reference
     *
     * @param \SimpleXMLElement $element
     *
     * @return none
     */
    public function setId($element)
    {
        // Gets the element name
        $elementName = (string) $element->getName();

        // Checks if there is a reference
        $reference = (string) $element->attributes()->reference;
        if (empty($reference)) {
            return XmlParser::getController()->addError('error.missingAttribute', array('reference', $elementName));
        }

        $newId = (string) $element->attributes()->newId;
        if (empty($newId)) {
            return XmlParser::getController()->addError('error.missingAttribute', array('newId', $elementName));
        }
        if (XmlParser::isReference($newId) !== FALSE) {
            $newId = XmlParser::getValueFromReference($newId);
        }

        // Gets the reference parts
        $referenceParts = explode('#', $reference);
        $xmlTag = $referenceParts[0];
        $id =  $referenceParts[1];

        // Performs the change in the xml tag results array
        $xmlTagResult = XmlParser::getXmlTagResult($xmlTag, $id);
        if ($xmlTagResult  === NULL) {
            return XmlParser::getController()->addError('error.incorrectReferenceValue', array($xmlTag, $id));
        }
        $xmlTagResult->setXmlTagId($newId);
        XmlParser::setXmlTagResult($xmlTag, $newId, $xmlTagResult);
        XmlParser::clearXmlTagResult($xmlTag, $id);
    }

    /**
     * Exports data in csv
     *
     * @param \SimpleXMLElement $element
     *
     * @return none
     */
    public function exportCSV($element) {
        // Gets the element name
        $elementName = (string) $element->getName();

        // Checks if there is a reference attribute
        $reference = (string) $element->attributes()->reference;
        if (empty($reference)) {
            return XmlParser::getController()->addError('error.missingAttribute', array('reference', $elementName));
        }

        // Checks if there is a data attribute
        $data = (string) $element->attributes()->data;
        if (empty($data)) {
            return XmlParser::getController()->addError('error.missingAttribute', array('data', $elementName));
        }
        $data = XmlParser::getValueFromReference($data);
        if ($data === FALSE) {
            return;
        }
        $data = XmlParser::ResolveValueByReference($data);

        // Checks if there is a row header attribute
        $rowHeader = (string) $element->attributes()->rowHeader;
        if (!empty($rowHeader)) {
            $rowHeader = XmlParser::getValueFromReference($rowHeader);
            if ($rowHeader === FALSE) {
                return;
            }
        }

        // Checks if there is a column header attribute
        $columnHeader = (string) $element->attributes()->columnHeader;
        if (!empty($columnHeader)) {
            $columnHeader = XmlParser::getValueFromReference($columnHeader);
            if ($columnHeader === FALSE) {
                return;
            }
            $columnHeader = XmlParser::ResolveValueByReference($columnHeader);
        }

        // Sets the row header
        $output = array();
        if (!empty($columnHeader)) {
            $rowHeader = array_merge(array(''), $rowHeader);
        }

        if (!is_array($rowHeader)) {
            return XmlParser::getController()->addError('error.exportCsv', array('rowHeader'));
        }
        $output[] = GeneralUtility::csvValues($rowHeader, ';');

        // Sets the rows
        if (!is_array($data[0])) {
            // Table with one row
            if (!is_array($data)) {
                return XmlParser::getController()->addError('error.exportCsv', array('data'));
            }
            $output[] = GeneralUtility::csvValues($data, ';');
        } else {
            // Table with several rows
            foreach ($data as $rowKey => $row) {
                if (!is_array($row)) {
                    return XmlParser::getController()->addError('error.exportCsv', array('data[' . $rowKey . ']'));
                }
                if (!empty($columnHeader)) {
                   $value = array_merge(array($columnHeader[$rowKey]), $row);
                   $output[] = GeneralUtility::csvValues($value, ';');
                } else {
                    $output[] = GeneralUtility::csvValues($row, ';');
                }
            }
        }

        $outputString = implode(chr(10), $output);

        // Checks if an encoding is required, default is ISO-8859-1
        $toEncoding = (string) $element->attributes()->encoding;
        if (empty($toEncoding)) {
            $toEncoding = 'ISO-8859-1';
        }
        if (XmlParser::isReference($toEncoding) !== FALSE) {
            $toEncoding = XmlParser::getValueFromReference($toEncoding);
        }
        $fromEncoding = mb_detect_encoding($outputString);
        $outputString = mb_convert_encoding($outputString, $toEncoding, $fromEncoding);

        // Gets the reference parts
        $referenceParts = explode('#', $reference);
        $xmlTag = $referenceParts[0];
        $id =  $referenceParts[1];

        // Performs the change in the xml tag results array
        $xmlTagResult = XmlParser::getXmlTagResult($xmlTag, $id);
        if ($xmlTagResult  === NULL) {
            return XmlParser::getController()->addError('error.incorrectReferenceValue', array($xmlTag, $id));
        }

        // Gets the xml tag value
        $xmlTagValue = $xmlTagResult->getXmlTagValue();

        // Adds the title
        $xmlTagValue['csv'] = $outputString;

        // Updates the xml tag result
        $xmlTagResult->setXmlTagValue($xmlTagValue);
    }

}

?>
