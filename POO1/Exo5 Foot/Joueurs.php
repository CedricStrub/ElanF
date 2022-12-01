<?php

class Joueurs{
    private $nom;
    private $prenom;
    private $aniv;
    private $pays;
    private $debut;
    
    public function __construct(string $nom,string $prenom,string $aniv,Pays $pays){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->aniv = new DateTime($aniv);
        $this->pays = $pays;
        $this->debut = [];

    }

    public function getInfo(){
        $a = $this->prenom." ".$this->nom." ( ";
        foreach($this->debut as $debut){
            $a = $a.$debut->getEquipe()->getNom()." ".$debut->getDate().",  ";
        }
        $a = substr($a,0,-3);
        $a = $a." )<br>";
        return $a;
    }

    public function addDebut($debut){
        $this->debut []= $debut;
    }

    public function getNom(){
        return $this->nom;
    }

    public function setNom($nom){
        $this->nom = $nom;
    }

    public function getPrenom(){
        return $this->prenom;
    }

    public function setPrenom($prenom){
        $this->prenom = $prenom;
    }

    public function getAniv(){
        return $this->aniv;
    }

    public function setAniv($aniv){
        $this->aniv = $aniv;
    }

    public function getDebut(){
        return $this->debut;
    }

    public function setDebut($debut){
        $this->debut = $debut;
    }

    public function getPays(){
        return $this->pays;
    }

    public function setPays($pays){
        $this->pays = $pays;
    }
}

?>