<?php




class Comissioner extends Human{

    private $workAdresse;
    private $bodyguard;
    private $team = [];
    




    /**
     * Get the value of workAdresse
     */ 
    public function getWorkAdresse() : Address
    {
        return $this->workAdresse;
    }

    /**
     * Set the value of workAdresse
     *
     * @return  self
     */ 
    public function setWorkAdresse(Address $workAdresse)
    {
        $this->workAdresse = $workAdresse;

        return $this;
    }

    /**
     * Get the value of bodyguard
     */ 
    public function getBodyguard() : Bodyguard
    {
        return $this->bodyguard;
    }

    /**
     * Set the value of bodyguard
     *
     * @return  self
     */ 
    public function setBodyguard(Bodyguard $bodyguard)
    {
        $this->bodyguard = $bodyguard;

        return $this;
    }

    /**
     * Get the value of team
     */ 
    public function getTeam() 
    {
        return $this->team;
    }

    /**
     * Set the value of team
     *
     * @return  self
     */ 
    public function setTeam($team)
    {
        $this->team = $team;

        return $this;
    }

    public function addToTeam(Human $person){
        array_push($this->team,$person);
    }

    public function __construct(string $firstname,string $lastname,string $gender,Date $birthdate, Address $address, Human $significantOther = null, Work $work = null,Address $workAddress , Bodyguard $bodyguard , $team)
    {
        parent::__construct($firstname,$lastname, $gender,$birthdate,$address, $significantOther, $work);
        $this->workAdresse = $workAddress;
        $this->bodyguard = $bodyguard;
        $this->team = $team;
    }




}