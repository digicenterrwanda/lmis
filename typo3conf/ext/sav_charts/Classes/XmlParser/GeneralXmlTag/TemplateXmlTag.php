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
 * Class template
 *
 * This class is used to define <template> </template> in xml code
 */
class TemplateXmlTag extends AbstractXmlTag
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
        $fileName = trim((string) $element);
        $child = $element->addChild('loadTemplate');
        $child->addAttribute('fileName', $fileName);
        $this->loadTemplate($child);
    }

    /**
     * Loads and processes an xml template
     *
     * @param \SimpleXMLElement $element
     *
     * @return none
     */
    public function loadTemplate($element)
    {
        // Gets the element name
        $elementName = (string) $element->getName();

        // Gets the attribute
        $fileName = (string) $element->attributes()->fileName;
        if ($fileName == '') {
            return  XmlParser::getController()->addError('error.missingAttribute', array(
                'fileName',
                $elementName
            ));
        }
        if (XmlParser::isReference($fileName) !== FALSE) {
            $fileName = XmlParser::getValueFromReference($fileName);
        }

        // loads and processes the file
        $this->xmlParser->loadXmlFile($fileName);
        $this->xmlParser->parseXml();
    }

}

?>
