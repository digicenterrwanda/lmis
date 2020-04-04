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
class ForXmlTag extends AbstractXmlTag
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
        // Gets the element name
        $elementName = (string) $element->getName();

        // Gets the each attribute
        $each = (string) $element->attributes()->each;
        if ($each == '') {
            return  XmlParser::getController()->addError('error.missingAttribute', array(
                'each',
                $elementName
            ));
        }

        // Checks if the each attribute is a reference
        // otherwise processes it as a comma-separated lis
        if ( XmlParser::isReference($each)) {
            $eachValue = XmlParser::getValueFromReference($each);
        } else {
            $eachValue = GeneralUtility::trimExplode(',', $each);
        }

        foreach($eachValue as $key => $value) {
            $this->xmlTagValue['key'] = $key;
            $this->xmlTagValue['value'] = $value;
            XmlParser::setXmlTagResult($elementName, $this->xmlTagId, $this);
            foreach ($element->children() as $child) {
                $this->xmlParser->processXmlElement($child);
            }
        }

    }


}

?>
