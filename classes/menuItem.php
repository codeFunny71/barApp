<?php

/**
 * Class MenuItem
 */
class MenuItem
{
    private $_itemName;
    private $_description;
    private $_itemPrice;
    private $_image;
    private $_categoryID;

    /**
     * MenuItem constructor.
     * @param $_itemName
     * @param $_description
     * @param $_itemPrice
     * @param $_image
     * @param $_categoryID
     */
    public function __construct($_itemName, $_description, $_itemPrice, $_image, $_categoryID)
    {
        $this->_itemName = $_itemName;
        $this->_description = $_description;
        $this->_itemPrice = $_itemPrice;
        $this->_image = $_image;
        $this->_categoryID = $_categoryID;
    }

    /**
     * @return mixed
     */
    public function getItemName()
    {
        return $this->_itemName;
    }

    /**
     * @param mixed $itemName
     */
    public function setItemName($itemName)
    {
        $this->_itemName = $itemName;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->_description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->_description = $description;
    }

    /**
     * @return mixed
     */
    public function getItemPrice()
    {
        return $this->_itemPrice;
    }

    /**
     * @param mixed $itemPrice
     */
    public function setItemPrice($itemPrice)
    {
        $this->_itemPrice = $itemPrice;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->_image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->_image = $image;
    }

    /**
     * @return mixed
     */
    public function getCategoryID()
    {
        return $this->_categoryID;
    }

    /**
     * @param mixed $categoryID
     */
    public function setCategoryID($categoryID)
    {
        $this->_categoryID = $categoryID;
    }




}