<?php

Class Commission implements WorkInterface
{
    private $employees = [];
    private $president;
    private $commissionners;
    private $vicePresident;


    /**
     * Get the value of employees
     */ 
    public function getEmployees()
    {
        return $this->employees;
    }

    /**
     * Set the value of employees
     *
     * @return  self
     */ 
    public function setEmployees($employees)
    {
        $this->employees = $employees;

        return $this;
    }

    /**
     * Get the value of president
     */ 
    public function getPresident()
    {
        return $this->president;
    }

    /**
     * Set the value of president
     *
     * @return  self
     */ 
    public function setPresident($president)
    {
        $this->president = $president;

        return $this;
    }

    /**
     * Get the value of commissionner
     */ 
    public function getCommissionners()
    {
        return $this->commissionners;
    }

    /**
     * Set the value of commissionner
     *
     * @return  self
     */ 
    public function setCommissionners($commissionners)
    {
        $this->commissionners = $commissionners;

        return $this;
    }

    /**
     * Get the value of vicePresident
     */ 
    public function getVicePresident()
    {
        return $this->vicePresident;
    }

    /**
     * Set the value of vicePresident
     *
     * @return  self
     */ 
    public function setVicePresident($vicePresident)
    {
        $this->vicePresident = $vicePresident;

        return $this;
    }

    public function __construct($employees, \President $president, \Commissionner $commissionners, \VicePresident $vicePresident)
    {
        $this->employees = $employees;
        $this->president = $president;
        $this->commissionners = $commissionners;
        $this->vicePresident = $vicePresident;
    }

    public function pay()
    {
    }
}