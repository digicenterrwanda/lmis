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
class PluginXmlTag extends AbstractXmlTag
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
        $this->xmlTagValue = $fileName;
    }

}

?>
