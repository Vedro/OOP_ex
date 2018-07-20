<?php
use src\Address\Address;
use src\Date\Date;

Class Venue
{
    private $date;
    private $address;

    /**
     * Get the value of date
     */ 
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */ 
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get the value of address
     */ 
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set the value of address
     *
     * @return  self
     */ 
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    public function __construct(\Date $date,\Address $address)
    {
        $this->date = $date;
        $this->adress = $address;
    }
}