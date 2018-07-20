<?php


class Human{

    private $firstname;
    private $lastname;
    private $gender;
    private $birthdate;
    private $significantOther;
    private $address;
    private $work;

    private static $allowedGender = ['male', 'female', 'other'];



    /**
     * Get the value of firstname
     */ 
    public function getFirstname() : string
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     *
     * @return  self
     */ 
    public function setFirstname(string $firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get the value of lastname
     */ 
    public function getLastname() : string
    {
        return $this->lastname;
    }

    /**
     * Set the value of lastname
     *
     * @return  self
     */ 
    public function setLastname(string $lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get the value of gender
     */ 
    public function getGender() : string
    {
        return $this->gender;
    }

    /**
     * Set the value of gender
     *
     * @return  self
     */ 
    public function setGender(string $gender)
    {
        if(in_array($gender, self::$allowedGender)){
            throw new \RuntimeException("gender not allowed, it needs to be male, female or other!");
        }
        
        $this->gender = $gender;

        
        return $this;
    }

    /**
     * Get the value of birthdate
     */ 
    public function getBirthdate() : Date
    {
        return $this->birthdate;
    }

    /**
     * Set the value of birthdate
     *
     * @return  self
     */ 
    public function setBirthdate(Date $birthdate)
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    /**
     * Get the value of significantOther
     */ 
    public function getSignificantOther() : Human
    {
        return $this->significantOther;
    }

    /**
     * Set the value of significantOther
     *
     * @return  self
     */ 
    public function setSignificantOther(Human $significantOther)
    {
        $this->significantOther = $significantOther;

        return $this;
    }

    /**
     * Get the value of address
     */ 
    public function getAddress() : Address
    {
        return $this->address;
    }

    /**
     * Set the value of address
     *
     * @return  self
     */ 
    public function setAddress(Address $address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get the value of work
     */ 
    public function getWork() : Work
    {
        return $this->work;
    }

    /**
     * Set the value of work
     *
     * @return  self
     */ 
    public function setWork(Work $work)
    {
        $this->work = $work;

        return $this;
    }

    public function __construct(string $firstname,string $lastname,string $gender,Date $birthdate, Address $address, Human $significantOther = null, Work $work = null)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->setGender($gender);
        $this->birthdate = $birthdate;
        $this->significantOther = $significantOther;
        $this->address = $address;
        $this->work = $work;       
    }

}