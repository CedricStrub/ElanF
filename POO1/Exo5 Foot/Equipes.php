<?php

class Equipes{
    private $nom;
    private $pays;
    private $joueurs;

    public function __construct(string $nom,Pays $pays){
        $this->nom = $nom;
        $this->pays = $pays;
        $pays->addEquipes($this);
    }

    public function getInfo(){
        $a = $this->nom." --> ";
        //var_dump($this->joueurs);
        foreach($this->joueurs as $joueur){
            $diff = $joueur->getAniv()->diff(new DateTimeImmutable(date('m/d/Y', time())));
            $a = $a.$joueur->getPrenom()." ".$joueur->getNom().' ( '.$diff->format('%y').' ans, '.$joueur->getPays()->getNom().' ),  ';
        }
        $a = substr($a,0,-3);
        $a = $a.'<br>';
        return $a;
    }

    public function addJoueurs(Joueurs $joueur){
        $this->joueurs []= $joueur;
    }

    public function getNom(){
        return $this->nom;
    }

    public function setNom($nom){
        $this->nom = $nom;
    }
}

?>