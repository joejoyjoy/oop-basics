<?php
//======================================================================
// JOE ALT - ASSEMBLER SCHOOL - PHP Object Oriented Programming
//======================================================================

/* interface.php - Interface */

interface PaymentInterface
{
    public function payNow();
}

class Paypal implements PaymentInterface
{
    public function payNow()
    {
        echo "The client has chosen to pay with the Paypal method";
    }
}

class Visa implements PaymentInterface
{
    public function payNow()
    {
        echo "The client has chosen to pay with the Visa card";
    }
}

class Cash implements PaymentInterface
{
    public function payNow()
    {
        echo "The client has chosen to pay with Cash";
    }
}

class BuyProduct
{
    public function pay(PaymentInterface $paymentType)
    {
        $paymentType->payNow();
    }
}