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
        $a = "<p3>".$this->nom." ".$this->ville." :</p3><br>";
        $a = $a.$this->adresse." ".$this->codeP." ".strtoupper($this->ville)."<br>";
        $a = $a."Nombre de chambre : ".$this->nbChambre."<br>";
        $a = $a."Nombre de chambre réservé : ".count($this->reservation)."<br>";
        $dispo = $this->nbChambre - count($this->reservation);
        $a = $a."Nombre de chambre disponible : ".$dispo."<br><br>";
        return $a;
    }

    public function getReservation(){
        $a = "<p3>Reservation de l'hôtel ".$this->nom." ".$this->ville." :</p3><br>";
        if($this->reservation == []){
            $a = $a."Aucune reservation pour le moment ! <br>";
        }
        else{
            $a = $a."<p4>".count($this->reservation)." Reservation </p4><br>";
            foreach($this->reservation as $res){
                $a = $a.$res->getClient()->getPrenom()." ".$res->getClient()->getNom()." - du ".$res->getArrive()." au ".$res->getDepart()."<br>";
            }
        }
        $a = $a."<br>";
        return $a;
    }

    public function getStatuts(){
        $a = "<p3>Statuts des chambres du ".$this->nom." ".$this->ville." :</p3><br>";
        $a = $a."<table><thead><tr><th>  Chambre  </th><th>  Prix  </th><th>  Wifi  </th><th>  Etat  </th></tr></thead>";
        foreach($this->chambres as $chambre){
            $a = $a."<tbody><tr><td>Chambre : ".$chambre->getNumero()."</td><td>".$chambre->getPrix()."</td><td>";
            if($chambre->getWifi() == true){
                $a = $a."📶</td><td>";
            }else{
                $a = $a."</td><td>";
            }
            if($chambre->getReservation() == []){
                $a = $a."<div id='dispo'>Disponible</div></td></tr>";
            }else{
                $a = $a."<div id='occupe'>Occupé</div></td></tr>";
            }
        }
        $a = $a."</tbody></table>";
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