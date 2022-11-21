<?php

class Real extends Personne {
    private $films;

    public function __construct(string $nom, string $prenom, string $sexe, string $aniv){
        Personne::__construct($nom,$prenom,$sexe,$aniv);
        $this->films = [];
    }

    public function addFilm(Films $film){
        $this->films []= $film;
    }

    public function __toString(){
        $a = $this->getNom()." ".$this->getPrenom()." est ";
        if($this->getSexe() == "homme"){
            $a = $a."un ".$this->getSexe()." de ";
        }elseif($this->getSexe() == "femme"){
            $a = $a."une ".$this->getSexe()." de ";
        }else{
            $a = $a."agé de ";
        }
        $age = $this->getAniv()->diff(new DateTimeImmutable(date('m/d/Y', time())));
        $a = $a.$age->format('%y')." ans sa filmographie est composé de :<br>";
        
        foreach($this->films as $film){
            $a = $a.$film->getTitre()." ( ".$film->getSortie()." ) Durée : ".$film->getDuree()."min : <br>";
        }

        return $a;
    }

}

?>