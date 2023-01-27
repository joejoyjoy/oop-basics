<?php
//======================================================================
// JOE ALT - ASSEMBLER SCHOOL - PHP Object Oriented Programming
//======================================================================

/* inherits.php - Class that inherits base class */

class Delivery extends Client
{
    // Properties
    public static $estiDate = "3-7 days";

    // Method add
    public function deliveryDate()
    {
        $date = $this->deliveryDate;
        return $date;
    }

    // Method override
    public function changeName($override)
    {
        $this->name = $override;
    }

    // Method abstract
    public function getDelivery() {
        return $this->upsDelivery();
    }
}
