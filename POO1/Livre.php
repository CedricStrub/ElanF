<?php

class Livre{
    private $titre;
    private $nbPages;
    private $parution;
    private $prix;
    private $auteur;


    public function __construct(string $titre,int $nbPages,int $parution, int $prix,Auteur $auteur){
        $this->titre = $titre;
        $this->nbPages = $nbPages;
        $this->parution = $parution;
        $this->prix = $prix;
        $this->auteur = $auteur;
        $this->auteur->addLivre($this);
    }

    public function getTitre(){
        return $this->titre;
    }

    public function getNbPages(){
        return $this->nbPages;
    }

    public function getParution(){
        return $this->parution;
    }

    public function getPrix(){
        return $this->prix;
    }

    public function __toString()
    {
        return $this->titre." ".$this->nbPages." ".$this->parution." ".$this->prix;
    }

}

?>