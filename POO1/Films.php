<?php

class Films{

    private $titre;
    private $sortie;
    private $duree;
    private $real;
    private $resume;
    private $genre;
    private $acteurs;

    public function __construct(string $titre,string $sortie,int $duree,string $resume,Genre $genre,Real $real){
        $this->titre = $titre;
        $this->sortie = $sortie;
        $this->duree = $duree;
        $this->resume = $resume;
        $this->genre = $genre;
        $genre->addFilm($this);
        $this->real = [];
        $real->addFilm($this);
        $this->acteurs = [];
    }

    public function addActeurs(Acteurs $acteur){
        $this->acteurs []= $acteur;
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

}

?>