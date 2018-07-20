<?php

class VicePresident extends Comissioner
{
    private $department;


    /**
     * Get the value of department
     */ 
    public function getDepartment() : string
    {
        return $this->department;
    }

    /**
     * Set the value of department
     *
     * @return  self
     */ 
    public function setDepartment(string $department) 
    {
        $this->department = $department;

        return $this;
    }

    public function __construct(string $firstname, string $lastname, string $gender, Date $birthdate, Address $address, Human $significantOther = null, Work $work = null, Address $workAddress, Bodyguard $bodyguard, $team , string $department)
    {
        parent::__construct($firstname, $lastname,  $gender,  $birthdate, $address, $significantOther, $work , $workAddress, $bodyguard, $team);
        $this->department = $department;
    }
}