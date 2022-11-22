<?php

class Pays{
    private $nom;
    private $equipes;

    public function __construct(string $nom){
        $this->nom = $nom;
        $this->equipes = [];
    }

    public function getInfo(){
        $a = $this->nom." --> ";
        foreach($this->equipes as $equipe){
            $a = $a.$equipe->getNom().",  ";
        }
        $a = substr($a,0,-3);
        $a =$a."<br>";
        return $a;
    }

    public function addEquipes($equipes){
        $this->equipes []= $equipes;
    }

    public function getNom(){
        return $this->nom;
    }

    public function setNom($nom){
        $this->nom = $nom;
    }
}

?>