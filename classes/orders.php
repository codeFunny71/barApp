<?php

/**
 * Class Orders
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
     * @param $_customerID
     * @param $_barID
     * @param $_itemsOrdered
     * @param $_tip
     * @param $_tax
     * @param $_total
     * @param $_status
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
     * @return mixed
     */
    public function getCustomerID()
    {
        return $this->_customerID;
    }

    /**
     * @param mixed $customerID
     */
    public function setCustomerID($customerID)
    {
        $this->_customerID = $customerID;
    }

    /**
     * @return mixed
     */
    public function getBarID()
    {
        return $this->_barID;
    }

    /**
     * @param mixed $barID
     */
    public function setBarID($barID)
    {
        $this->_barID = $barID;
    }

    /**
     * @return mixed
     */
    public function getItemsOrdered()
    {
        return $this->_itemsOrdered;
    }

    /**
     * @param mixed $itemsOrdered
     */
    public function setItemsOrdered($itemsOrdered)
    {
        $this->_itemsOrdered = $itemsOrdered;
    }

    /**
     * @return mixed
     */
    public function getTip()
    {
        return $this->_tip;
    }

    /**
     * @param mixed $tip
     */
    public function setTip($tip)
    {
        $this->_tip = $tip;
    }

    /**
     * @return mixed
     */
    public function getTax()
    {
        return $this->_tax;
    }

    /**
     * @param mixed $tax
     */
    public function setTax($tax)
    {
        $this->_tax = $tax;
    }

    /**
     * @return mixed
     */
    public function getTotal()
    {
        return $this->_total;
    }

    /**
     * @param mixed $total
     */
    public function setTotal($total)
    {
        $this->_total = $total;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->_status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->_status = $status;
    }


}