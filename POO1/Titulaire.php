<?php

class Titulaire{
    private $nom;
    private $prenom;
    private $aniv;
    private $ville;
    private $compte;

    public function __construct(string $nom,string $prenom,string $aniv,string $ville)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->aniv = new DateTime($aniv);
        $this->ville = $ville;
        $this->compte = [];
    }

    public function addCompte(Compte $compte){
        $this->compte []= $compte;
    }

    public function virementCompte($montant,$c1,$c2){
        echo $montant;
        echo $c1;
        echo $c2;
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

    public function getVille(){
        return $this->ville;
    }

    public function setVille($ville){
        $this->ville = $ville;
    }

    public function __toString()
    {
        return $this->nom." ".$this->prenom." ".$this->aniv." ".$this->ville;
    }
}

?>