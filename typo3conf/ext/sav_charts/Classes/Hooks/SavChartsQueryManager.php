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

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Service\TypoScriptService;
use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;
use TYPO3\CMS\Core\Database\DatabaseConnection;

/**
 * Hook for the query manager "savcharts"
 */
class SavChartsQueryManager extends AbstractQueryManager
{
    // Constants for the handler type
    const NATIVE = 0;
    const ADODB = 1;
    const USERDEFINED = 2;

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
     * Executes the query
     *
     * @param integer $queryId
     *            The query id
     *
     * @return array The rows
     */
    public function executeQuery($queryId)
    {
        // Initializes the query
        if(!$this->initialize($queryId)) {
            return;
        }

        // Creates the markers
        $markers = $this->markers;

        // Gets the typoScript custom query
        $typoScriptService = GeneralUtility::makeInstance(TypoScriptService::class);
        $typoScriptConfiguration = $typoScriptService->convertPlainArrayToTypoScriptArray($this->controller->getSettings());
        $isCustomQuery = is_array($typoScriptConfiguration) && is_array($typoScriptConfiguration['customQuery.']) && is_array($typoScriptConfiguration['customQuery.'][$queryId . '.']);
        if ($isCustomQuery) {
            $customQueryMarkers = $typoScriptConfiguration['customQuery.'][$queryId . '.'];
            $contentObject = GeneralUtility::makeInstance(ContentObjectRenderer::class);
            foreach ($customQueryMarkers as $customQueryMarkerKey => $customQueryMarker) {
                if (strpos($customQueryMarkerKey, '.') === FALSE) {
                    $markers[$customQueryMarkerKey] = $contentObject->cObjGetSingle($customQueryMarker, $customQueryMarkers[$customQueryMarkerKey . '.']);
                }
            }
        }

        // Creates the markers keys
        $markersKeys = array();
        foreach (array_keys($markers) as $key => $value) {
            $markersKeys[$value] = '###' . $value . '###';
        }

        // Parses the query with the markers
        $this->query = str_replace($markersKeys, $markers, $this->query);

        // Gets the rows
        $rows = $this->databaseConnection->exec_SELECTgetRows($this->query['selectClause'], $this->query['fromClause'], $this->query['whereClause'], $this->query['groupbyClause'], $this->query['orderbyClause'], $this->query['limitClause']);
        if ($rows === NULL) {
            $this->controller->addError('error.queryReturnedNull', array($queryId));
        }

        return $rows;
    }

    /**
     * Initialization
     *
     * @param integer $queryId
     *            The query id
     *
     * @return none
     */
    protected function initialize($queryId)
    {
        // Gets the object
        $object = $this->controller->getQueryRepository()->findByUid($queryId);
        if ($object === NULL) {
            $this->controller->addError('error.queryError', array($queryId));
            return FALSE;
        }

        // Gets the query
        $this->query['selectClause'] = trim($object->getSelectClause());
        $this->query['fromClause'] = trim($object->getFromClause());
        $this->query['whereClause'] = trim($object->getWhereClause());
        $this->query['groupbyClause'] = trim($object->getGroupbyClause());
        $this->query['orderbyClause'] = trim($object->getOrderbyClause());
        $this->query['limitClause'] = trim($object->getLimitClause());

        // Processes the database
        $databaseId = $object->getDatabaseId();

        if ($databaseId === NULL) {
            $this->databaseConnection = $GLOBALS['TYPO3_DB'];
        } else {
            $title = $databaseId->getTitle();
            $handlertype = $databaseId->getHandlertype();
            $host = $databaseId->getHost();
            $port = $databaseId->getPort();
            $socket = $databaseId->getSocket();
            $name = $databaseId->getName();
            $username = $databaseId->getUsername();
            $userpassword =  $databaseId->getUserpassword();
            $persistent = $databaseId->getPersistent();

            // Processes connection according to the handler type
            switch ($handlertype) {
                case self::NATIVE:
                    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['dbal']['handlerCfg']['_DEFAULT'] = array(
                        'type' => 'native',
                        'config' => array(
                            'username' => $username,
                            'password' => $userpassword,
                            'socket' => $socket,
                            'host' => $host,
                            'port' => $port,
                            'database' => $name,
                            'driver' => $databaseId->getDriver(),
                        )
                    );
                    break;
                case self::ADODB:
                    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['dbal']['handlerCfg'][$title] = array(
                        'type' => 'adodb',
                        'config' => array(
                            'username' => $username,
                            'password' => $userpassword,
                            'host' => $host,
                            'port' => $port,
                            'database' => $name,
                            'driver' => $databaseId->getDriver(),
                        )
                    );

                    // Creates the table handler for the database
                    $tables = explode(chr(10), str_replace(chr(13), '', $databaseId->getTables()));
                    foreach ($tables as $table) {
                        $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['dbal']['table2handlerKeys'][$table] = trim($title);
                    }
                    break;
                case self::USERDEFINED:
                        break;
            }
            $this->databaseConnection = $this->openDatabaseConnection($host, $port, $socket, $name, $username, $userpassword, $persistent);
            $this->databaseConnection->initialize();
        }

        return TRUE;
    }

    /**
     * Opens a database connection
     *
     * @param string $host
     *            database host
     * @param integer $port
     *            database port
     * @param integer $socket
     *            socket
     * @param string $name
     *            database name
     * @param string $username
     *            database username
     * @param string $password
     *            database password
     * @param boolean $persistentDatabaseConnection
     *            database persistent connection
     *
     * @return \TYPO3\CMS\Core\Database\DatabaseConnection The database connection
     */
    protected function openDatabaseConnection($host, $port, $socket, $name, $username, $password, $persistentDatabaseConnection)
    {
        $databaseConnection = GeneralUtility::makeInstance(DatabaseConnection::class);
        if (! empty($host)) {
            $databaseConnection->setDatabaseHost($host);
            $databaseConnection->setDatabasePort($port);
        } elseif (! empty($socket)) {
            $databaseConnection->setDatabaseSocket($socket);
        }
        $databaseConnection->setDatabaseName($name);
        $databaseConnection->setDatabaseUsername($username);
        $databaseConnection->setDatabasePassword($password);
        $databaseConnection->setPersistentDatabaseConnection($persistentDatabaseConnection);

        return $databaseConnection;
    }
}

?>