<?php

class Personne{

    private $email;
    private $mdp;

    function __construct($_email, $_mdp){ 
        $this->email = $_email;  
        $this->mdp = $_mdp;  
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function getMdp()
    {
        return $this->mdp;
    }

    public function setMdp($mdp)
    {
        $this->mdp = $mdp;

        return $this;
    }
}