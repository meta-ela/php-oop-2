<?php
require_once __DIR__ . "/Users.php";
class PaymentMetod extends Users
{
    public $shipmentAddress;
    public $paymentMethod;
    public $paymentCard;

    function __construct($_firstName, $_lastName, $_shipmentsAddress, $_paymentCard)
    {
        parent::__construct($_firstName, $_lastName);

        $this->setShipmentAddress($_shipmentsAddress);
        $this->setPaymentCard($_paymentCard);
    }

    /**
     * Get the value of shipmentAddress
     */ 
    public function getShipmentAddress()
    {
        return $this->shipmentAddress;
    }

    /**
     * Set the value of shipmentAddress
     *
     * @return  self
     */ 
    public function setShipmentAddress($shipmentAddress)
    {
        $this->shipmentAddress = $shipmentAddress;

        return $this;
    }

    /**
     * Get the value of paymentMethod
     */ 
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * Set the value of paymentMethod
     *
     * @return  self
     */ 
    public function setPaymentMethod($paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;

        return $this;
    }

    /**
     * Get the value of paymentCard
     */ 
    public function getPaymentCard()
    {
        return $this->paymentCard;
    }

    /**
     * Set the value of paymentCard
     *
     * @return  self
     */ 
    public function setPaymentCard($paymentCard)
    {
        $this->paymentCard = $paymentCard;

        return $this;
    }
}