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
 * The abstract tag class
 */
abstract class AbstractXmlTag
{

    /**
     * Xml Parser
     *
     * @var \YolfTypo3\SavCharts\XmlParser\XmlParser
     */
    protected $xmlParser;

    /**
     * The value associated with the tag
     *
     * @var mixed
     */
    protected $xmlTagValue = NULL;

    /**
     * The tag id
     *
     * @var string
     */
    protected $xmlTagId = '0';

    /**
     * The overload flag
     *
     * @var boolean
     */
    protected $overload = FALSE;

    /**
     * Construtor
     *
     * @return none
     */
    public function __construct() {
        $this->xmlParser = GeneralUtility::makeInstance('YolfTypo3\\SavCharts\\XmlParser\\XmlParser');
    }

    /**
     * Default method
     *
     * @param \SimpleXMLElement $element
     *
     * @return none
     */
    public function defaultMethod($element)
    {}

    /**
     * Gets the xml tag value
     *
     * @return mixed
     */
    public function getXmlTagValue()
    {
        return $this->xmlTagValue;
    }

    /**
     * Sets the xml tag value
     *
     * @param mixed $xmlTagValue
     * @return none
     */
    public function setXmlTagValue($xmlTagValue)
    {
        $this->xmlTagValue = $xmlTagValue;
    }

    /**
     * Sets the xml tag id
     *
     * @param string $xmlTagId
     * @return none
     */
    public function setXmlTagId($xmlTagId)
    {
        $this->xmlTagId = $xmlTagId;
    }

    /**
     * Gets the overload flag
     *
     * @return boolean
     */
    public function getOverload() {
        return $this->overload;
    }

    /**
     *  Sets the overloadIsAllowed flag
     *
     * @param boolean $overload
     * @return none
     */
    public function setOverload($overload) {
        $this->overload = $overload;
    }
}

?>
