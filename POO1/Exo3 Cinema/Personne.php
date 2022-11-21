<?php

class Personne{
    private $nom;
    private $prenom;
    private $sexe;
    private $aniv;

    public function __construct(string $nom,string $prenom,string $sexe,string $aniv){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->sexe = $sexe;
        $this->aniv = new DateTime($aniv);
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

    public function getSexe(){
        return $this->sexe;
    }

    public function setSexe($sexe){
        $this->sexe = $sexe;
    }

    public function getAniv(){
        return $this->aniv;
    }

    public function setAniv($aniv){
        $this->aniv = $aniv;
    }

}

?>