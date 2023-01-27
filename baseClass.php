<?php
//======================================================================
// JOE ALT - ASSEMBLER SCHOOL - PHP Object Oriented Programming
//======================================================================

/* baseClass.php - Base Class */
/* baseClass.php - Abstract Class */

abstract class Client
{
    // Properties
    public $name;
    public $email;
    public $selectedProduct;
    protected $deliveryDate = "05 FEB";

    // Constructor
    public function __construct($name, $email, $selectedProduct)
    {
        $this->name = $name;
        $this->email = $email;
        $this->selectedProduct = $selectedProduct;
    }

    // Methods
    public function setName($name)
    {
        $this->name = $name;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setproduct($selectedProduct)
    {
        $this->selectedProduct = $selectedProduct;
    }

    // Method abstract
    public function upsDelivery()
    {
        return "The goods will be send in 3-7 days by UPS Delivery service";
    }
    abstract public function getDelivery();

    // Constructor
    public function __destruct()
    {
    }
}
