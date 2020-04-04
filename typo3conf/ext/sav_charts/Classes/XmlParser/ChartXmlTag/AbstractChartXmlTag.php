<?php
namespace YolfTypo3\SavCharts\XmlParser\ChartXmlTag;

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

/**
 * Abstract class for Chart tags
 *
 */
use YolfTypo3\SavCharts\XmlParser\XmlParser;

abstract class AbstractChartXmlTag extends \YolfTypo3\SavCharts\XmlParser\GeneralXmlTag\AbstractXmlTag
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
        $this->postProcessingMethod();
    }

    /**
     * Post processing method
     *
     * @param \SimpleXMLElement $element
     *
     * @return none
     */
    public function postProcessingMethod($element)
    {
        // Gets the element name
        $elementName = (string) $element->getName();

        // Gets the width
        $width = (string) $element->attributes()->width;
        if ( XmlParser::isReference($width) !== FALSE) {
            $width = XmlParser::getValueFromReference($width);
        } elseif (empty($width)) {
            $width = 400;
        }
        if (XmlParser::isReference($width) !== FALSE) {
            $width = XmlParser::getValueFromReference($width);
        }
        $this->xmlTagValue['width'] = $width;

        // Gets the height
        $height = (string) $element->attributes()->height;
        if ( XmlParser::isReference($height) !== FALSE) {
            $height = XmlParser::getValueFromReference($height);
        } elseif  (empty($height)) {
            $height = 300;
        }
        if (XmlParser::isReference($height) !== FALSE) {
            $height = XmlParser::getValueFromReference($height);
        }
        $this->xmlTagValue['height'] = $height;

        // Gets the data
        $data = (string) $element->attributes()->data;
        if (empty($data)) {
            return XmlParser::getController()->addError('error.missingAttribute', array('data', $elementName));
        }
        $this->xmlTagValue['data'] = $data;

        // Gets the options
        $options = (string) $element->attributes()->options;
        $this->xmlTagValue['options'] = $options;
    }

}
?>
