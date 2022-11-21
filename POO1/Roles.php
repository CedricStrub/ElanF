<?php

class Roles {
    private $role;
    private $acteurs;

    public function __construct(string $role){
        $this->role = $role;
        $this->acteurs = [];
    }

    public function addActeur(Acteurs $acteur){
        $this->acteurs []= $acteur;
    }

    public function getRole(){
        return $this->role;
    }

    public function setRole($role){
        $this->role = $role;
    }

    public function __toString(){
        $a = "Le role de ".$this->role.' à été interprété par :<br>';
        foreach($this->acteurs as $acteur){
            $a = $a."--".$acteur->getNom()." ".$acteur->getPrenom()."<br>";
        }
        return $a;
    }

}

?>