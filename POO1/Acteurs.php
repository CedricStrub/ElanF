<?php

class Acteurs extends Personne{
    private $role;
    private $films;

    public function __construct(string $nom, string $prenom, string $sexe, string $aniv){
        Personne::__construct($nom,$prenom,$sexe,$aniv);
        $this->role = [];
        $this->films = [];
    }

    public function addFilm(Films $film){
        $this->films []= $film;
    }

    public function addRole(Roles $role){
        $this->role = $role;
        $role->addActeur($this);
    }

    public function getRole(){
        return $this->role;
    }

    public function setRole($role){
        $this->role = $role;
    }

    public function __toString(){
        $a = $this->getNom()." ".$this->getPrenom()." à joué dans les films suivants :<br>";
        foreach($this->films as $film){
            $a = $a."--".$film->getTitre()." ( ".$film->getSortie()." ) réalisé par ".$film->getReal()->getNom()." ".$film->getReal()->getPrenom()."<br>";
        }
        return $a;
    }

}

?>