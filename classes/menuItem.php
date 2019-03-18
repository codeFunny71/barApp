<?php

/**
 * Class MenuItem
 * This class creates a menu item Object
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
     * @param $_itemName the name of the item
     * @param $_description the description of the item
     * @param $_itemPrice the price of the item
     * @param $_image the image for the item
     * @param $_categoryID the category of the id
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
     * This getter returns the name of the item
     * @return the item name
     */
    public function getItemName()
    {
        return $this->_itemName;
    }

    /**
     * This setter sets the name of the item
     * @param mixed $itemName the name of the item
     */
    public function setItemName($itemName)
    {
        $this->_itemName = $itemName;
    }

    /**
     * This getter returns the description of the item
     * @return the item description
     */
    public function getDescription()
    {
        return $this->_description;
    }

    /**
     * This setter sets the description for the item
     * @param mixed $description the item description
     */
    public function setDescription($description)
    {
        $this->_description = $description;
    }

    /**
     * This getter returns the price of the item
     * @return the price
     */
    public function getItemPrice()
    {
        return $this->_itemPrice;
    }

    /**
     * This setter sets the price of the item
     * @param mixed $itemPrice the item's price
     */
    public function setItemPrice($itemPrice)
    {
        $this->_itemPrice = $itemPrice;
    }

    /**
     * This getter gets the image for the item
     * @return the image for the item
     */
    public function getImage()
    {
        return $this->_image;
    }

    /**
     * This setter sets the image for the item
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->_image = $image;
    }

    /**
     * This getter gets the category for the item
     * @return the category
     */
    public function getCategoryID()
    {
        return $this->_categoryID;
    }

    /**
     * This setter sets the category of the item
     * @param mixed $categoryID the item's category
     */
    public function setCategoryID($categoryID)
    {
        $this->_categoryID = $categoryID;
    }




}