<?php

class Roles {
    private $role;
    private $acteurs;

    private $casting;

    public function __construct(string $role){
        $this->role = $role;
        $this->acteurs = [];
        $this->casting = [];
    }

    public function addActeur(Acteurs $acteur){
        $this->acteurs []= $acteur;
    }

    public function addCasting(Casting $casting){
        $this->casting []= $casting;
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
            $a = $a."--".$acteur->getPrenom()." ".$acteur->getNom()."<br>";
        }
        return $a;
    }

}

?>