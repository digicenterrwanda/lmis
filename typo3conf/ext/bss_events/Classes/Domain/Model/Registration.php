<?php

namespace Bermuda\BssEvents\Domain\Model;

class Registration extends AbstractModel
{
    /**
     * @var bool
     **/
    protected $public = false;

    /**
     * @var string
     **/
    protected $message = '';

    /**
     * @var \Bermuda\BssEvents\Domain\Model\Appointment
     **/
    protected $appointment = null;




    /**
     * @return bool
     */
    public function isPublic()
    {
        return $this->public;
    }

    /**
     * @return bool
     */
    public function getPublic()
    {
        return $this->public;
    }

    /**
     * @param bool $public
     */
    public function setPublic($public)
    {
        $this->public = $public;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * @return \Bermuda\BssEvents\Domain\Model\Appointment
     */
    public function getAppointment()
    {
        return $this->appointment;
    }

    /**
     * @param \Bermuda\BssEvents\Domain\Model\Appointment $appointment
     */
    public function setAppointment($appointment)
    {
        $this->appointment = $appointment;
    }

    public function getDo(){

        if($this->public)
            return true;

        if($GLOBALS['TSFE']->fe_user->user['uid'])
            return true;

        return false;
    }

    public function __clone(){
        $obj = new Registration();
        $obj->setPublic($this->getPublic());
        $obj->setMessage($this->getMessage());
        return $obj;
    }
}