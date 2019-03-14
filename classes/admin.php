<?php

/**
 * Class Admin
 */
class Admin
{
    private $_userName;
    private $_password;
    private $_barName;
    private $_barAddress;
    private $_city;
    private $_state;
    private $_zipCode;
    private $_email;
    private $_phone;

    /**
     * Admin constructor.
     * @param $_userName
     * @param $_password
     * @param $_barName
     * @param $_barAddress
     * @param $_city
     * @param $_state
     * @param $_zipCode
     * @param $_email
     * @param $_phone
     */
    public function __construct($_userName, $_password, $_barName, $_barAddress, $_city, $_state, $_zipCode, $_email, $_phone)
    {
        $this->_userName = $_userName;
        $this->_password = $_password;
        $this->_barName = $_barName;
        $this->_barAddress = $_barAddress;
        $this->_city = $_city;
        $this->_state = $_state;
        $this->_zipCode = $_zipCode;
        $this->_email = $_email;
        $this->_phone = $_phone;
    }

    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->_userName;
    }

    /**
     * @param mixed $userName
     */
    public function setUserName($userName)
    {
        $this->_userName = $userName;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->_password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->_password = $password;
    }

    /**
     * @return mixed
     */
    public function getBarName()
    {
        return $this->_barName;
    }

    /**
     * @param mixed $barName
     */
    public function setBarName($barName)
    {
        $this->_barName = $barName;
    }

    /**
     * @return mixed
     */
    public function getBarAddress()
    {
        return $this->_barAddress;
    }

    /**
     * @param mixed $barAddress
     */
    public function setBarAddress($barAddress)
    {
        $this->_barAddress = $barAddress;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->_city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->_city = $city;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->_state;
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->_state = $state;
    }

    /**
     * @return mixed
     */
    public function getZipCode()
    {
        return $this->_zipCode;
    }

    /**
     * @param mixed $zipCode
     */
    public function setZipCode($zipCode)
    {
        $this->_zipCode = $zipCode;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->_email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->_email = $email;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->_phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->_phone = $phone;
    }


}