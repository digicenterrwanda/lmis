<?php
namespace YolfTypo3\SavCharts\Hooks;

/**
 * Copyright notice
 *
 * (c) 2016 Laurent Foulloy (Laurent Foulloy) <yolf.typo3@orange.fr>
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
 * Abstract query manager
 */
abstract class AbstractQueryManager implements QueryManagerInterface
{

    /**
     * Controller
     *
     * @var \YolfTypo3\SavCharts\Controller\DefaultController
     */
    protected $controller;

    /**
     * Markers
     *
     * @var array
     */
    protected $markers = array();

    /**
     * Database connection
     *
     * @var \TYPO3\CMS\Core\Database\DatabaseConnection
     */
    protected $databaseConnection = NULL;

    /**
     * Query
     *
     * @var array
     */
    protected $query = array();

    /**
     * Injects the controller
     *
     * @param \YolfTypo3\SavCharts\Controller\DefaultController $controller
     *
     * @return none
     */
    public function injectController(\YolfTypo3\SavCharts\Controller\DefaultController $controller)
    {
        $this->controller = $controller;
    }

    /**
     * Injects the markers
     *
     * @param array $markers
     *            The markers array
     *
     * @return none
     */
    public function injectMarkers($markers)
    {
        if (! empty($markers)) {
            $this->markers = $markers;
        }
    }

    /**
     * Executes the query
     *
     * @param integer $queryId
     *            The query id
     *
     * @return array The rows
     */
    public function executeQuery($queryId)
    {
        return array();
    }

}

?>