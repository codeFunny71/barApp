<?php

/**
 * Class Admin
 */
class Customer
{

    private $_firstName;
    private $_lastName;
    private $_address;
    private $_city;
    private $_state;
    private $_zipCode;
    private $_phone;
    private $_email;
    private $_password;
    private $_account;

    /**
     * Customer constructor.
     * @param $_firstName
     * @param $_lastName
     * @param $_address
     * @param $_city
     * @param $_state
     * @param $_zipCode
     * @param $_phone
     * @param $_email
     * @param $_password
     * @param int $_account
     */
    public function __construct($_firstName, $_lastName, $_address, $_city, $_state, $_zipCode, $_phone, $_email, $_password, $_account = 0)
    {
        $this->_firstName = $_firstName;
        $this->_lastName = $_lastName;
        $this->_address = $_address;
        $this->_city = $_city;
        $this->_state = $_state;
        $this->_zipCode = $_zipCode;
        $this->_phone = $_phone;
        $this->_email = $_email;
        $this->_password = $_password;
        $this->_account = $_account;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->_firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->_firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->_lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->_lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->_address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->_address = $address;
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
     * @return int
     */
    public function getAccount()
    {
        return $this->_account;
    }

    /**
     * @param int $account
     */
    public function setAccount($account)
    {
        $this->_account = $account;
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



}