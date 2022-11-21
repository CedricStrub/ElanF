<?php

class Client{

    private $nom;
    private $prenom;

    private $reservation;

    public function __construct(string $nom,string $prenom){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->reservation = [];
    }

    public function addReservation(Reservation $reservation){
        $this->reservation []= $reservation;
    }

    public function getInfo(){
        $a = "Reservation de ".$this->prenom." ".$this->nom."<br>";
        $a = $a.count($this->reservation)." Reservation <br>";
        foreach($this->reservation as $res){
            $a = $a.$res->getHotel()->getNom()." ".$res->getHotel()->getVille()." / Chambre : ".$res->getChambre()->getNumero();
            $a = $a." ( ".$res->getChambre()->getNbLit()." lits - ".$res->getChambre()->getPrix()." € - Wifi : ";
            if($res->getChambre()->getWifi() == true){
                $a = $a."oui ) du ";
            }else{
                $a = $a."non ) du ";
            }
            $a = $a.$res->getArrive()." au ".$res->getDepart().'<br>';
        }
        $a = $a."<br>";
        return $a;
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

}

?>