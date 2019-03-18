<?php

/**
 * Class Orders
 * This class creates an order Object
 */
class Orders
{
    private $_customerID;
    private $_barID;
    private $_itemsOrdered;
    private $_tip;
    private $_tax;
    private $_total;
    private $_status;

    /**
     * Orders constructor.
     * @param $_customerID the id of the customer
     * @param $_barID the id of the bar
     * @param $_itemsOrdered the items ordered
     * @param $_tip the tip
     * @param $_tax the tax
     * @param $_total the total
     * @param $_status the order's status
     */
    public function __construct($_customerID, $_barID, $_itemsOrdered,  $_total, $_status = 0, $_tax = .1, $_tip = 0)
    {
        $this->_customerID = $_customerID;
        $this->_barID = $_barID;
        $this->_itemsOrdered = $_itemsOrdered;
        $this->_tip = $_tip;
        $this->_tax = $_tax;
        $this->_total = $_total;
        $this->_status = $_status;
    }

    /**
     * This getter returns the customer's id
     * @return customer's id
     */
    public function getCustomerID()
    {
        return $this->_customerID;
    }

    /**
     * This setter sets the customer's id
     * @param mixed $customerID customer's id
     */
    public function setCustomerID($customerID)
    {
        $this->_customerID = $customerID;
    }

    /**
     * This getter returns the bar's id
     * @return bar's id
     */
    public function getBarID()
    {
        return $this->_barID;
    }

    /**
     * This setter sets the bar's id
     * @param mixed $barID
     */
    public function setBarID($barID)
    {
        $this->_barID = $barID;
    }

    /**
     * This getter returns the items ordered
     * @return the items ordered
     */
    public function getItemsOrdered()
    {
        return $this->_itemsOrdered;
    }

    /**
     * This setter sets the items ordered
     * @param mixed $itemsOrdered the items ordered
     */
    public function setItemsOrdered($itemsOrdered)
    {
        $this->_itemsOrdered = $itemsOrdered;
    }

    /**
     * This getter gets the tip
     * @return the tip
     */
    public function getTip()
    {
        return $this->_tip;
    }

    /**
     * This setter sets the tip for the order
     * @param mixed $tip
     */
    public function setTip($tip)
    {
        $this->_tip = $tip;
    }

    /**
     * This getter returns the tax for the order
     * @return the tax
     */
    public function getTax()
    {
        return $this->_tax;
    }

    /**
     * This setter sets the tax for the order
     * @param mixed $tax the tax
     */
    public function setTax($tax)
    {
        $this->_tax = $tax;
    }

    /**
     * This getter returns the total for the order
     * @return the total
     */
    public function getTotal()
    {
        return $this->_total;
    }

    /**
     * This setter sets the total for the order
     * @param mixed $total the total
     */
    public function setTotal($total)
    {
        $this->_total = $total;
    }

    /**
     * This getter returns the status of the order
     * @return the status of the order
     */
    public function getStatus()
    {
        return $this->_status;
    }

    /**
     * This setter sets the status of the order
     * @param mixed $status the status of the order
     */
    public function setStatus($status)
    {
        $this->_status = $status;
    }


}