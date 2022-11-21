<?php

class Casting{

    private $nom;
    private $prenom;
    private $role;

    public function __construct(){
        $this->nom = [];
        $this->prenom = [];
        $this->role = [];
    }

    public function addActeur($nom, $prenom, $role){
        $this->nom []= $nom;
        $this->prenom []= $prenom;
        $this->role []= $role;
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

    public function getRole(){
        return $this->role;
    }

    public function setRole($role){
        $this->role = $role;
    }

    public function __toString(){
        $a = "";

        return $a;
    }


}

?>