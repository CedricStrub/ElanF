<?php

class Chambre{
    private $numero;
    private $nbLit;
    private $wifi;
    private $prix;
    private $reservation;
    private $hotel;

    public function __construct(int $numero,int $nbLit,bool $wifi,int $prix,Hotel $hotel){
        $this->numero = $numero;
        $this->nbLit = $nbLit;
        $this->wifi = $wifi;
        $this->prix = $prix;
        $this->reservation = [];
        $this->hotel = $hotel;
        $hotel->addChambre($this);
    }

    public function addReservation(Reservation $reservation){
        $this->reservation []= $reservation;
    }

    public function getReservation(){
        return $this->reservation;
    }

    public function getNumero(){
        return $this->numero; 
    }

    public function setNumero($numero){
        $this->numero = $numero;
    }

    public function getNbLit(){
        return $this->nbLit;
    }

    public function setNbLit($nbLit){
        $this->nbLit =$nbLit;
    }

    public function getWifi(){
        return $this->wifi;
    }

    public function setWifi($wifi){
        $this->wifi = $wifi;
    }

    public function getPrix(){
        return $this->prix;
    }

    public function setPrix($prix){
        $this->prix = $prix;
    }

}

?>