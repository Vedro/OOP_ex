<?php

class President extends VicePresident
{
    public function represent() : Commission
    {
        return $this->getWork();
    }

    public function __construct(string $firstname, string $lastname, string $gender, Date $birthdate, Address $address, Human $significantOther = null, WorkInterface $work = null, Address $workAddress, Bodyguard $bodyguard, $team ,string $department)
    {
        parent::__construct( $firstname, $lastname,  $gender,  $birthdate, $address, $significantOther, $work , $workAddress, $bodyguard, $team , $department);
    }
}