<?php

class Compte{
    private $libelle;
    private $solde;
    private $devise;
    private $titulaire;

    public function __construct(string $libelle,float $solde,string $devise,Titulaire $titulaire)
    {
        $this->libelle = $libelle;
        $this->solde = $solde;
        $this->devise = $devise;
        $this->titulaire = $titulaire;
        $this->titulaire->addCompte($this);
    }

    public function crediterCompte($montant){
        $this->solde += $montant;
        echo "Le ".$this->libelle." de ".$this->titulaire->getNom()." ".$this->titulaire->getPrenom()." est crédité de ".$montant." ".$this->devise."<br>" ;
        echo "Son nouveau solde est de : ".$this->solde." €<br>";
    }

    public function debiterCompte($montant){
        $this->solde -= $montant;
        echo "Le ".$this->libelle." de ".$this->titulaire->getNom()." ".$this->titulaire->getPrenom()." est débité de ".$montant." ".$this->devise."<br>" ;
        echo "Son nouveau solde est de : ".$this->solde." €<br>";
    }

    public function virementCompte($montant,Compte $c){
        $tauxED = 1.04;
        $tauxEP = 0.87;
        $tauxDP = 0.84;
        //taux au 18/11/2022 09:00 am
        $this->debiterCompte($montant);
        switch([$this->devise,$c->getDevise()]){
            case ["€","$"] : $montant = $montant * $tauxED; break;
            case ["$","€"] : $montant = $montant * (2 - $tauxED); break;
            case ["€","£"] : $montant = $montant * $tauxEP; break;
            case ["£","€"] : $montant = $montant * (2 - $tauxEP); break;
            case ["$","£"] : $montant = $montant * $tauxDP; break;
            case ["£","$"] : $montant = $montant * (2 - $tauxDP); break;
        }
        $c->crediterCompte($montant);
    }

    public function getLibelle(){
        return $this->libelle;
    }

    public function setLibelle($libelle){
        $this->libelle = $libelle;
    }

    public function getSolde(){
        return $this->solde;
    }

    public function setSolde($solde){
        $this->solde = $solde;
    }

    public function getDevise(){
        return $this->devise;
    }

    public function setDevise($devise){
        $this->devise = $devise;
    }

    public function getTitulaire(){
        return $this->titulaire;
    }

    public function setTitulaire($titulaire){
        $this->titulaire = $titulaire;
    }

    public function __toString(){
        return "Le ".$this->libelle." de ".$this->titulaire->getNom()." ".$this->titulaire->getPrenom()." contient : ".$this->solde." ".$this->devise."<br>";
    }

}

?>