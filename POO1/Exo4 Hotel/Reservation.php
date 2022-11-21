<?php

class Reservation{

    private $hotel;
    private $client;
    private $chambre;
    private $arrive;
    private $depart;

    public function __construct(Hotel $hotel,Client $client,Chambre $chambre,string $arrive,string $depart){
        $this->hotel = $hotel;
        $this->client = $client;
        $this->chambre = $chambre;
        $this->arrive = $arrive;
        $this->depart = $depart;
        $hotel->addReservation($this);
        $client->addReservation($this);
        $chambre->addReservation($this);
    }

    public function getClient(){
        return $this->client;
    }

    public function getHotel(){
        return $this->hotel;
    }

    public function getChambre(){
        return $this->chambre;
    }

    public function getArrive(){
        return $this->arrive;
    }

    public function setArrive($arrive){
        $this->arrive = $arrive;
    }

    public function getDepart(){
        return $this->depart;
    }

    public function setDepart($depart){
        $this->depart = $depart;
    }
}

?>