<?php

class Debut{
    private $date;
    private $joueur;
    private $equipe;

    public function __construct(string $date,Joueurs $joueur,Equipes $equipe){
        $this->date = $date;
        $this->joueur = $joueur;
        $this->equipe = $equipe;
        $joueur->addDebut($this);
        $equipe->addJoueurs($joueur);
    }

    public function getEquipe(){
        return $this->equipe;
    }

    public function getDate(){
        return $this->date;
    }

    public function setDate($date){
        $this->date = $date;
    }

}


?>