<?php

class Auteur{
    private $nom;
    private $prenom;
    private $bibliographie;

    public function __construct(string $nom, string $prenom)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->bibliographie= [];
    }

    public function afficherBibliographie(){
        echo "<h2>Livres de ".$this->prenom." ".$this->nom."</h2>";
        foreach ($this->bibliographie as $livre ){
            echo $livre->getTitre()." (".$livre->getParution().") : ".$livre->getNbPages()." / ".$livre->getPrix()." €<br>";
        }
    }

    public function addLivre(Livre $livre){
        $this->bibliographie []= $livre;
    }

    public function __toString()
    {
        return $this->nom." ".$this->prenom;
    }

}

?>