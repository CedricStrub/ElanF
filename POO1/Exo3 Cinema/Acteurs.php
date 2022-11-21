<?php

class Acteurs extends Personne{
    private $films;

    private $casting;

    public function __construct(string $prenom, string $nom, string $sexe, string $aniv){
        Personne::__construct($nom,$prenom,$sexe,$aniv);
        $this->films = [];
        $this->casting = [];
    }

    public function addFilm(Films $film){
        $this->films []= $film;
    }

    public function addCasting(Casting $casting){
        $this->casting []= $casting;
    }

    public function __toString(){
        $a = $this->getPrenom()." ".$this->getNom()." à joué dans les films suivants :<br>";
        foreach($this->films as $film){
            $a = $a."--".$film->getTitre()." ( ".$film->getSortie()." ) réalisé par ".$film->getReal()->getNom()." ".$film->getReal()->getPrenom()."<br>";
        }
        return $a;
    }

}

?>