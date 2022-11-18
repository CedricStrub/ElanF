<?php

class Real extends Personne {
    private $films;

    public function __construct(string $nom, string $prenom, string $sexe, string $aniv){
        Personne::__construct($nom,$prenom,$sexe,$aniv);
        $this->films = [];
    }

    public function addFilm(Films $film){
        $this->films = $film;
    }

    public function __toString(){
        $a = $this->nom." ".$this->prenom." est ";
        if($this->sexe == "homme"){
            $a = $a."un ".$this->sexe." de ";
        }elseif($this->sexe == "femme"){
            $a = $a."une ".$this->sexe." de ";
        }else{
            $a = $a."agé de ";
        }
        $age = $this->aniv->diff(new DateTimeImmutable(date('m/d/Y', time())));
        $a = $a.$age->format('%y')." ans sa filmographie est composé de :";
        
        return $a;
    }

}

?>