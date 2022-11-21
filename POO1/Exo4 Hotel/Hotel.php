<?php

class Hotel{

    private $nom;
    private $ville;
    private $adresse;
    private $codeP;
    private $nbChambre;
    private $chambres;
    private $reservation;

    public function __construct(string $nom,string $ville,string $adresse,int $codeP,int $nbChambre){
        $this->nom = $nom;
        $this->ville = $ville;
        $this->adresse = $adresse;
        $this->codeP = $codeP;
        $this->chambres = [];
        $this->nbChambre = $nbChambre;
        $this->reservation = [];
    }

    public function addReservation(Reservation $reservation){
        $this->reservation []= $reservation;
    }

    public function getInfo(){
        $a = $this->nom." ".$this->ville." :<br>";
        $a = $a.$this->adresse." ".$this->codeP." ".strtoupper($this->ville)."<br>";
        $a = $a."Nombre de chambre : ".$this->nbChambre."<br>";
        $a = $a."Nombre de chambre réservé : ".count($this->reservation)."<br>";
        $a = $a."Nombre de chambre disponible : ".$this->nbChambre - count($this->reservation)."<br><br>";
        return $a;
    }

    public function getReservation(){
        $a = "Reservation de l'hôtel ".$this->nom." ".$this->ville." :<br>";
        $a = $a.count($this->reservation).' Reservation <br>';
        foreach($this->reservation as $res){
            $a = $a.$res->getClient()->getPrenom()." ".$res->getClient()->getNom()." - du ".$res->getArrive()." au ".$res->getDepart()."<br>";
        }
        $a = $a."<br>";
        return $a;
    }

    public function getStatuts(){
        $a = "Statuts des chambres du ".$this->nom." ".$this->ville." :<br>";
        $a = $a."<table><tr><th>  Chambre  </th><th>  Prix  </th><th>  Wifi  </th><th>  Etat  </th></tr>";
        foreach($this->chambres as $chambre){
            $a = $a."<tr><td>".$chambre->getNumero()."</td><td>".$chambre->getPrix()."</td><td>";
            if($chambre->getWifi() == true){
                $a = $a."oui</td><td>";
            }else{
                $a = $a."non</td><td>";
            }
            if($chambre->getReservation() == []){
                $a = $a."Disponible</td></tr>";
            }else{
                $a = $a."Occupé</td></tr>";
            }
        }
        $a = $a."</table>";
        return $a;
    }

    public function addChambre($chambre){
        $this->chambres []= $chambre;
    }

    public function getNom(){
        return $this->nom;
    }

    public function setNom($nom){
        $this->nom = $nom;
    }

    public function getVille(){
        return $this->ville;
    }

    public function setVille($ville){
        $this->ville = $ville;
    }

    public function getAdresse(){
        return $this->adresse;
    }

    public function setAdresse($adresse){
        $this->adresse = $adresse;
    }

    public function getCodeP(){
        return $this->codeP;
    }

    public function setCodeP($codeP){
        $this->codeP = $codeP;
    }

    public function getNbChambre(){
        return $this->nbChambre;
    }

    public function setNbChambre($nbChambre){
        $this->nbChambre = $nbChambre;
    }
}


?>