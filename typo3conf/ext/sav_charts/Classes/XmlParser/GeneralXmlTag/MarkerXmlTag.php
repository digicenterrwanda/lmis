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
 * Class marker
 *
 * This class is used to define <marker> </marker> in xml code
 */
class MarkerXmlTag extends AbstractXmlTag
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
        $value = (string) $element;
        $child = $element->addChild('setMarker');
        $attributes = $element->attributes();
        if ($value != '' || isset($attributes['value'])) {
            $child->addAttribute('value', $value);
        }
        $this->setMarker($child);
    }

    /**
     * Sets a marker
     *
     * @param \SimpleXMLElement $element
     *
     * @return none
     */
    public function setMarker($element)
    {
        // Gets the element name
        $elementName = (string) $element->getName();

        // Gets the attribute
        $attributes = $element->attributes();
        if (!isset($attributes['value'])) {
            return  XmlParser::getController()->addError('error.missingAttribute', array(
                'value',
                $elementName
            ));
        } else {
            $value = (string) $element->attributes()->value;
        }
        if (XmlParser::isReference($value) !== FALSE) {
            $value = XmlParser::getValueFromReference($value);
        }
        $marker = XmlParser::replaceSpecialChars($value);
        $this->xmlTagValue = $marker;
    }

    /**
     * Sets a marker by pieces
     *
     * @param \SimpleXMLElement $element
     *
     * @return none
     */
    public function setMarkerByPieces($element)
    {
        // Builds the marker string from the parameters
        $markers = '';
        foreach ($element->attributes() as $attributeKey => $attribute) {
            $marker = (string) $attribute;
            if ( XmlParser::isReference($marker) !== FALSE) {
                $marker = XmlParser::getValueFromReference($marker);
            }
            $markers .= $marker;
        }

        $markers = XmlParser::replaceSpecialChars($markers);
        $this->xmlTagValue = $markers;
    }
}

?>
