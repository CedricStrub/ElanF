<?php

class Roles {
    private $pseudo;
    private $acteurs;

    public function __construct(string $pseudo){
        $this->pseudo = $pseudo;
        $this->acteurs = [];
    }

    public function addActeur(Acteurs $acteur){
        $this->acteurs []= $acteur;
    }

    public function getPseudo(){
        return $this->pseudo;
    }

    public function setPseudo($pseudo){
        $this->pseudo = $pseudo;
    }

}

?>