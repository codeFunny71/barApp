<?php

/**
 * Class Admin this class creates an admin Object
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
     * @param $_userName the username of the admin
     * @param $_password the password for the admin
     * @param $_barName the name of the bar
     * @param $_barAddress the address of the bar
     * @param $_city the city the bar is located in
     * @param $_state the state the bar is located in
     * @param $_zipCode the zipcode of the bar
     * @param $_email the email for the admin
     * @param $_phone the phone number for the admin
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
     * This getter returns the username of the user
     * @return the username of the user
     */
    public function getUserName()
    {
        return $this->_userName;
    }

    /**
     * This setter sets the username
     * @param $userName the username of the user
     */
    public function setUserName($userName)
    {
        $this->_userName = $userName;
    }

    /**
     * This getter returns the password for the user
     * @return the password for the user
     */
    public function getPassword()
    {
        return $this->_password;
    }

    /**
     * This setter sets the password for the user
     * @param $password the password for the user
     */
    public function setPassword($password)
    {
        $this->_password = $password;
    }

    /**
     * This getter returns the name of the bar
     * @return the bar name
     */
    public function getBarName()
    {
        return $this->_barName;
    }

    /**
     * This setter sets the name of the bar
     * @param mixed $barName the bar name
     */
    public function setBarName($barName)
    {
        $this->_barName = $barName;
    }

    /**
     * This getter returns the address of the bar
     * @return the address of the bar
     */
    public function getBarAddress()
    {
        return $this->_barAddress;
    }

    /**
     * This setter sets the address of the bar
     * @param mixed $barAddress
     */
    public function setBarAddress($barAddress)
    {
        $this->_barAddress = $barAddress;
    }

    /**
     * This getter returns the city of the bar
     * @return the city of the bar
     */
    public function getCity()
    {
        return $this->_city;
    }

    /**
     * This setter sets the city of the bar
     * @param mixed $city the city of the bar
     */
    public function setCity($city)
    {
        $this->_city = $city;
    }

    /**
     * This getter returns the state of the bar
     * @return mixed the state the bar is located in
     */
    public function getState()
    {
        return $this->_state;
    }

    /**
     * This setter sets the state the bar is located in
     * @param mixed $state the state the bar is located in
     */
    public function setState($state)
    {
        $this->_state = $state;
    }

    /**
     * This getter returns the zipcode for the bar
     * @return the zipcode of the bar
     */
    public function getZipCode()
    {
        return $this->_zipCode;
    }

    /**
     * This setter sets the zipcode of the bar
     * @param mixed $zipCode the zipcode for the bar
     */
    public function setZipCode($zipCode)
    {
        $this->_zipCode = $zipCode;
    }

    /**
     * This getter returns the email of the admin
     * @return the email of the admin
     */
    public function getEmail()
    {
        return $this->_email;
    }

    /**
     * This setter sets the email of the admin
     * @param mixed $email the email of the admin
     */
    public function setEmail($email)
    {
        $this->_email = $email;
    }

    /**
     * This getter returns the phone number of the admin
     * @return the phone number
     */
    public function getPhone()
    {
        return $this->_phone;
    }

    /**
     * This setter sets the phone number for the admin
     * @param mixed $phone the phone number
     */
    public function setPhone($phone)
    {
        $this->_phone = $phone;
    }


}