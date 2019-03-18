<?php

/**
 * Class Customer
 * This class creates a customer Object
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
     * @param $_firstName the customer's first name
     * @param $_lastName the customer's last name
     * @param $_address the customer's address
     * @param $_city the customer's city
     * @param $_state the customer's state
     * @param $_zipCode the customer's zipcode
     * @param $_phone the customer's phone number
     * @param $_email the customer's email
     * @param $_password the customer's password
     * @param int $_account the customer's account
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
     * This getter returns the first name of the customer
     * @return the first name
     */
    public function getFirstName()
    {
        return $this->_firstName;
    }

    /**
     * This setter sets the first name of the customer
     * @param mixed $firstName the first name
     */
    public function setFirstName($firstName)
    {
        $this->_firstName = $firstName;
    }

    /**
     * This getter returns the customer's last name
     * @return the last name
     */
    public function getLastName()
    {
        return $this->_lastName;
    }

    /**
     * This setter sets the last name
     * @param mixed $lastName the last name
     */
    public function setLastName($lastName)
    {
        $this->_lastName = $lastName;
    }

    /**
     * This getter returns the address of the customer
     * @return the address
     */
    public function getAddress()
    {
        return $this->_address;
    }

    /**
     * This setter sets the address
     * @param mixed $address the address
     */
    public function setAddress($address)
    {
        $this->_address = $address;
    }

    /**
     * This getter returns the city of the customer
     * @return the city
     */
    public function getCity()
    {
        return $this->_city;
    }

    /**
     * This setter sets the city for the customer
     * @param mixed $city the city
     */
    public function setCity($city)
    {
        $this->_city = $city;
    }

    /**
     * This getter returns the state for the customer
     * @return the state
     */
    public function getState()
    {
        return $this->_state;
    }

    /**
     * This setter sets the state for the customer
     * @param mixed $state the state
     */
    public function setState($state)
    {
        $this->_state = $state;
    }

    /**
     * This getter returns the zipcode for the customer
     * @return the zipcode
     */
    public function getZipCode()
    {
        return $this->_zipCode;
    }

    /**
     * This setter sets the zip code
     * @param mixed $zipCode the zipcode
     */
    public function setZipCode($zipCode)
    {
        $this->_zipCode = $zipCode;
    }

    /**
     * This getter returns the phone number
     * @return the phone number
     */
    public function getPhone()
    {
        return $this->_phone;
    }

    /**
     * This setter sets the phone number
     * @param mixed $phone the phone number
     */
    public function setPhone($phone)
    {
        $this->_phone = $phone;
    }

    /**
     * This getter returns the email of the customer
     * @return mixed
     */
    public function getEmail()
    {
        return $this->_email;
    }

    /**
     * This setter sets the email
     * @param mixed $email the email
     */
    public function setEmail($email)
    {
        $this->_email = $email;
    }

    /**
     * This getter gets the account of the customer
     * @return int the account
     */
    public function getAccount()
    {
        return $this->_account;
    }

    /**
     * This setter sets the account for the customer
     * @param int $account the account
     */
    public function setAccount($account)
    {
        $this->_account = $account;
    }

    /**
     * This getter returns the user's password
     * @return the password
     */
    public function getPassword()
    {
        return $this->_password;
    }

    /**
     * This setter sets the user's password
     * @param mixed $password the password
     */
    public function setPassword($password)
    {
        $this->_password = $password;
    }



}