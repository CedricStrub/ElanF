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
    }

    public function debiterCompte($montant){
        $this->solde -= $montant;
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

}

?>