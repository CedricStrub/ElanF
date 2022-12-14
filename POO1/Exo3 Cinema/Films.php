<?php

class Films{

    private $titre;
    private $sortie;
    private $duree;
    private $real;
    private $resume;
    private $genre;
    private $acteurs;
    private $casting;

    public function __construct(string $titre,string $sortie,int $duree,string $resume){
        $this->titre = $titre;
        $this->sortie = $sortie;
        $this->duree = $duree;
        $this->resume = $resume;
        $this->genre = [];
        $this->real = [];
        $this->acteurs = [];
        $this->casting = [];
    }

    public function addActeurs(Acteurs $acteur){
        $this->acteurs []= $acteur;
        $acteur->addFilm($this);
    }

    public function addGenre (Genre $genre){
        $this->genre = $genre;
        $genre->addFilm($this);
    }

    public function addReal(Real $real){
        $this->real = $real;
        $real->addFilm($this);
    }

    public function addCasting(Casting $casting){
        $this->casting []= $casting;
    }

    public function getTitre(){
        return $this->titre;
    }

    public function setTitre($titre){
        $this->titre = $titre;
    }

    public function getSortie(){
        return $this->sortie;
    }

    public function setSortie($sortie){
        $this->sortie = $sortie;
    }

    public function getDuree(){
        return $this->duree;
    }

    public function setDuree($duree){
        $this->duree = $duree;
    }

    public function getResume(){
        return $this->resume;
    }

    public function setResume($resume){
        $this->resume = $resume;
    }

    public function getGenre(){
        return $this->genre;
    }

    public function setGenre($genre){
        $this->genre = $genre;
    }

    public function getReal(){
        return $this->real;
    }

    public function __toString(){
        $a = "Dans le film ".$this->titre." ( ".$this->sortie." ) :<br>";
        foreach($this->casting as $cast){
            $a = $a.$cast->__toString();
        }
        return $a;
    }

}

?>