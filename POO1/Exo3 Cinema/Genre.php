<?php

class Genre {
    private $genre;
    private $films;

    public function __construct(string $genre){
        $this->genre = $genre;
        $this->films = [];
    }

    public function addFilm(Films $film){
        $this->films []= $film;
    }

    public function getGenre(){
        return $this->genre;
    }

    public function setGenre($genre){
        $this->genre = $genre;
    }

    public function __toString(){
        $a = "Liste de film de ".$this->genre." :<br>";
        foreach($this->films as $film){
            $a = $a.$film->getTitre()." ( ".$film->getSortie()." )<br>";
        }
        return $a;
    }
}

?>