<?php

/**
 * Class happyHour
 * This class creates a menu item during happy hour
 */
class happyHour extends menuItem
{
    private $_happyHourPrice;

    /**
     * happyHour constructor.
     * This constructor creates a menu item with the happy hour price
     * @param $_itemName the item's name
     * @param $_description the description of the item
     * @param $_itemPrice the price of the item
     * @param $_image an image of the item
     * @param $_categoryID the category of the item
     */
    public function __construct($_itemName, $_description, $_itemPrice, $_image, $_categoryID)
    {
        parent::__construct($_itemName, $_description, $_itemPrice, $_image, $_categoryID);
        $this->_happyHourPrice = $_itemPrice - ($_itemPrice * 0.2);
    }
}