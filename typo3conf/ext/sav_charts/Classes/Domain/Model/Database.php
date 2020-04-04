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
 * Database model for the extension SavCharts
 *
 */
class Database extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * The title variable.
     *
     * @var string
     * @validate raw
     */
    protected $title;

    /**
     * The handlertype variable.
     *
     * @var integer
     * @validate raw
     */
    protected $handlertype;

    /**
     * The driver variable.
     *
     * @var string
     * @validate raw
     */
    protected $driver;

    /**
     * The tables variable.
     *
     * @var string
     * @validate text
     */
    protected $tables;

    /**
     * The host variable.
     *
     * @var string
     * @validate raw
     */
    protected $host;

    /**
     * The port variable.
     *
     * @var integer
     * @validate integer
     */
    protected $port;

    /**
     * The socket variable.
     *
     * @var string
     * @validate raw
     */
    protected $socket;

    /**
     * The name variable.
     *
     * @var string
     * @validate raw
     */
    protected $name;

    /**
     * The username variable.
     *
     * @var string
     * @validate raw
     */
    protected $username;

    /**
     * The userpassword variable.
     *
     * @var string
     * @validate raw
     */
    protected $userpassword;

    /**
     * The persistent variable.
     *
     * @var boolean
     * @validate raw
     */
    protected $persistent;

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
     * Getter for handlertype.
     *
     * @return integer
     */
    public function getHandlertype()
    {
        return $this->handlertype;
    }

    /**
     * Setter for handlertype.
     *
     * @param integer $handlertype
     * @return void
     */
    public function setHandlertype($handlertype)
    {
        $this->handlertype = $handlertype;
    }    

    /**
     * Getter for driver.
     *
     * @return string
     */
    public function getDriver()
    {
        return $this->driver;
    }

    /**
     * Setter for driver.
     *
     * @param string $driver
     * @return void
     */
    public function setDriver($driver)
    {
        $this->driver = $driver;
    }    

    /**
     * Getter for tables.
     *
     * @return string
     */
    public function getTables()
    {
        return $this->tables;
    }

    /**
     * Setter for tables.
     *
     * @param string $tables
     * @return void
     */
    public function setTables($tables)
    {
        $this->tables = $tables;
    }    

    /**
     * Getter for host.
     *
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Setter for host.
     *
     * @param string $host
     * @return void
     */
    public function setHost($host)
    {
        $this->host = $host;
    }    

    /**
     * Getter for port.
     *
     * @return integer
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * Setter for port.
     *
     * @param integer $port
     * @return void
     */
    public function setPort($port)
    {
        $this->port = $port;
    }    

    /**
     * Getter for socket.
     *
     * @return string
     */
    public function getSocket()
    {
        return $this->socket;
    }

    /**
     * Setter for socket.
     *
     * @param string $socket
     * @return void
     */
    public function setSocket($socket)
    {
        $this->socket = $socket;
    }    

    /**
     * Getter for name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Setter for name.
     *
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }    

    /**
     * Getter for username.
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Setter for username.
     *
     * @param string $username
     * @return void
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }    

    /**
     * Getter for userpassword.
     *
     * @return string
     */
    public function getUserpassword()
    {
        return $this->userpassword;
    }

    /**
     * Setter for userpassword.
     *
     * @param string $userpassword
     * @return void
     */
    public function setUserpassword($userpassword)
    {
        $this->userpassword = $userpassword;
    }    

    /**
     * Getter for persistent.
     *
     * @return boolean
     */
    public function getPersistent()
    {
        return $this->persistent;
    }

    /**
     * Setter for persistent.
     *
     * @param boolean $persistent
     * @return void
     */
    public function setPersistent($persistent)
    {
        $this->persistent = $persistent;
    }    

}
?>

