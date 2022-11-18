<?php

class Acteurs extends Personne{
    private $role;
    private $films;

    public function __construct(string $nom, string $prenom, string $sexe, string $aniv,Roles $role){
        Personne::__construct($nom,$prenom,$sexe,$aniv);
        $this->role = $role;
        $role->addActeur($this);
        $this->films = [];
    }

    public function addFilm(Films $film){
        $this->films []= $film;
    }

}

?>