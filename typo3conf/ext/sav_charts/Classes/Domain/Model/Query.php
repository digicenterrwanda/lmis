<?php

namespace YolfTypo3\SavCharts\Domain\Model;
/**
*  Copyright notice
*
*  (c) 2017 Laurent Foulloy <yolf.typo3@orange.fr>
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script
*/
/**
 * Query model for the extension SavCharts
 *
 */
class Query extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * The title variable.
     *
     * @var string
     * @validate raw
     */
    protected $title;

    /**
     * The databaseId variable.
     *
     * @var \YolfTypo3\SavCharts\Domain\Model\Database
     * @validate raw
     */
    protected $databaseId;

    /**
     * The selectClause variable.
     *
     * @var string
     * @validate text
     */
    protected $selectClause;

    /**
     * The fromClause variable.
     *
     * @var string
     * @validate text
     */
    protected $fromClause;

    /**
     * The whereClause variable.
     *
     * @var string
     * @validate text
     */
    protected $whereClause;

    /**
     * The groupbyClause variable.
     *
     * @var string
     * @validate text
     */
    protected $groupbyClause;

    /**
     * The orderbyClause variable.
     *
     * @var string
     * @validate text
     */
    protected $orderbyClause;

    /**
     * The limitClause variable.
     *
     * @var string
     * @validate text
     */
    protected $limitClause;

    /**
     * Constructor.
     */
    public function __construct()
    {
    }

    /**
     * Getter for title.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Setter for title.
     *
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }    

    /**
     * Getter for databaseId.
     *
     * @return \YolfTypo3\SavCharts\Domain\Model\Database    
     */
    public function getDatabaseId()
    {
        return $this->databaseId;
    }

    /**
     * Setter for databaseId.
     *
     * @param \YolfTypo3\SavCharts\Domain\Model\Database     $databaseId
     * @return void
     */
    public function setDatabaseId($databaseId)
    {
        $this->databaseId = $databaseId;
    }    

    /**
     * Getter for selectClause.
     *
     * @return string
     */
    public function getSelectClause()
    {
        return $this->selectClause;
    }

    /**
     * Setter for selectClause.
     *
     * @param string $selectClause
     * @return void
     */
    public function setSelectClause($selectClause)
    {
        $this->selectClause = $selectClause;
    }    

    /**
     * Getter for fromClause.
     *
     * @return string
     */
    public function getFromClause()
    {
        return $this->fromClause;
    }

    /**
     * Setter for fromClause.
     *
     * @param string $fromClause
     * @return void
     */
    public function setFromClause($fromClause)
    {
        $this->fromClause = $fromClause;
    }    

    /**
     * Getter for whereClause.
     *
     * @return string
     */
    public function getWhereClause()
    {
        return $this->whereClause;
    }

    /**
     * Setter for whereClause.
     *
     * @param string $whereClause
     * @return void
     */
    public function setWhereClause($whereClause)
    {
        $this->whereClause = $whereClause;
    }    

    /**
     * Getter for groupbyClause.
     *
     * @return string
     */
    public function getGroupbyClause()
    {
        return $this->groupbyClause;
    }

    /**
     * Setter for groupbyClause.
     *
     * @param string $groupbyClause
     * @return void
     */
    public function setGroupbyClause($groupbyClause)
    {
        $this->groupbyClause = $groupbyClause;
    }    

    /**
     * Getter for orderbyClause.
     *
     * @return string
     */
    public function getOrderbyClause()
    {
        return $this->orderbyClause;
    }

    /**
     * Setter for orderbyClause.
     *
     * @param string $orderbyClause
     * @return void
     */
    public function setOrderbyClause($orderbyClause)
    {
        $this->orderbyClause = $orderbyClause;
    }    

    /**
     * Getter for limitClause.
     *
     * @return string
     */
    public function getLimitClause()
    {
        return $this->limitClause;
    }

    /**
     * Setter for limitClause.
     *
     * @param string $limitClause
     * @return void
     */
    public function setLimitClause($limitClause)
    {
        $this->limitClause = $limitClause;
    }    

}
?>

