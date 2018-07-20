<?php

class Bodyguard extends Human
{
    private $protecte;


    /**
     * Get the value of protecte
     */ 
    public function getProtecte() : Comissioner
    {
        return $this->protecte;
    }

    /**
     * Set the value of protecte
     *
     * @return  self
     */ 
    public function setProtecte(Comissioner $protecte)
    {
        $this->protecte = $protecte;

        return $this;
    }

    public function __construct(string $firstname, string $lastname, string $gender, Date $birthdate, Address $address, Human $significantOther = null, WorkInterface $work = null , Human $protecte)
    {
        parent::__construct($firstname,$lastname, $gender,$birthdate,$address, $significantOther, $work);
        $this->protecte = $protecte;
    }
}