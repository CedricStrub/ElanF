<?php

class Casting{

    private $film;
    private $acteur;
    private $role;

    public function __construct($film,$acteur,$role){
        $this->film = $film;
        $this->acteur = $acteur;
        $this->role = $role;
        $film->addCasting($this);
        $acteur->addCasting($this);
        $role->addCasting($this);
    }

    public function getActeur(){
        return $this->acteur;
    }

    public function setActeur($acteur){
        $this->acteur = $acteur;
    }

    public function getRole(){
        return $this->role;
    }

    public function setRole($role){
        $this->role = $role;
    }

    public function getFilm(){
        return $this->film;
    }

    public function setFilm($film){
        $this->film = $film;
    }

    public function __toString(){
        $a = $this->role->getRole()." a été incarné par ".$this->acteur->getPrenom()." ".$this->acteur->getNom()."<br>";
        return $a;
    }

}

?>