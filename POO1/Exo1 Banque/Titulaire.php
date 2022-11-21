<?php

class Titulaire{
    private $nom;
    private $prenom;
    private $aniv;
    private $ville;
    private $compte;

    public function __construct(string $nom,string $prenom,string $aniv,string $ville)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->aniv = new DateTime($aniv);
        $this->ville = $ville;
        $this->compte = [];
    }

    public function addCompte(Compte $compte){
        $this->compte []= $compte;
    }    

    public function getNom(){
        return $this->nom;
    }

    public function setNom($nom){
        $this->nom = $nom;
    }

    public function getPrenom(){
        return $this->prenom;
    }

    public function setPrenom($prenom){
        $this->prenom = $prenom;
    }

    public function getAniv(){
        return $this->aniv;
    }

    public function setAniv($aniv){
        $this->aniv = $aniv;
    }

    public function getVille(){
        return $this->ville;
    }

    public function setVille($ville){
        $this->ville = $ville;
    }

    public function __toString()
    {
        $age = $this->aniv->diff(new DateTimeImmutable(date('m/d/Y', time())));
        $a = $this->nom." ".$this->prenom." agé de ".$age->format('%y')." ans, habite ".
            $this->getVille()." et possède ".count($this->compte)." compte :<br>";
        foreach($this->compte as $c){
            $a = $a."    - Un ".$c->getLibelle()." contenant : ".$c->getSolde()." ".$c->getDevise()."<br>";
        }
        return $a;
    }
}

?>