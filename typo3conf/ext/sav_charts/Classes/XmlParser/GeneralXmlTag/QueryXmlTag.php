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

/**
 * Class query
 *
 * This class is used to define <query> </query> in xml code
 */
class QueryXmlTag extends AbstractXmlTag
{

    /**
     * Sets the query manager
     * .
     * @param \SimpleXMLElement $element
     *
     * @return none
     */
    public function setQueryManager($element)
    {
        // Gets the element name
        $elementName = (string) $element->getName();

        // Gets the attributes
        $name = NULL;
        $uid = NULL;
        $markers = array();
        foreach ($element->attributes() as $attributeKey => $attribute) {
            if ($attributeKey == 'name') {
                $name = (string) $attribute;
            } elseif ($attributeKey == 'uid') {
                $uid = (string) $attribute;
            } else {
                if (preg_match('/^marker#(\w*)$/', (string) $attribute, $match)) {
                    $attribute = XmlParser::getValueFromReference((string) $attribute);
                } elseif (preg_match('/^(\w+)#(data|marker)#(\w+)((:)(?:(\d+)))?$/', (string) $attribute, $match)) {
                    $attribute = XmlParser::getValueFromReference($match[2], $match[3], ($match[6] ? $match[6] : 0));
                }
                if(preg_match('/^(\w+)#(.*)$/', (string) $attribute, $match)) {
                    $markers[$match[1]] = $match[2];
                }
            }
        }

        // Checks if the attribute name exists
        if ($name === NULL) {
            return XmlParser::getController()->addError('error.missingAttribute', array(
                'name',
                $elementName
            ));
        }
        if (XmlParser::isReference($name) !== FALSE) {
            $name = XmlParser::getValueFromReference($name);
        }

        // Checks if the attribute uid exists
        if ($uid === NULL) {
            return XmlParser::getController()->addError('error.missingAttribute', array(
                'uid',
                $elementName
            ));
        }
        if (XmlParser::isReference($uid) !== FALSE) {
            $uid = XmlParser::getValueFromReference($uid);
        }

        // Processes the query
        $this->xmlTagValue = $this->xmlParser->processQuery($name, $uid, $markers);
    }

}

?>
