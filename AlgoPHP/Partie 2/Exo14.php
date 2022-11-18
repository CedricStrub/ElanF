<h1>Exercice 14</h1>

<p>Créer une classe Voiture possédant 2 propriétés(marque et modèle) ainsi qu’une classe VoitureElec <br>
qui hérite(extends) de la classe Voiture et qui a une propriété supplémentaire (autonomie).<br>
<br>
Instancier une voiture «classique» et une voiture «électrique»ayant les caractéristiques suivantes:<br>
Peugeot 408: $v1 = new Voiture("Peugeot","408");<br>
BMW i3150: $ve1 = new VoitureElec("BMW","I3",100);<br>
<br>
Votre programme de test devra afficher les informations des 2 voitures de la façon suivante:<br> 
    echo $v1->getInfos()."br/";<br>
    echo $ve1->getInfos()."br/";</p>

<h2>Résultat</h2>

<?php

$v1 = new Voiture("Peugeot","408");
$ve1 = new VoitureElec("BMW","I3",100);

echo $v1->getInfo()."<br/>";
echo $ve1->getInfo()."<br/>";

class Voiture
{
    private $marque;
    private $modele;

    public function __construct(string $marque,string $modele){
        $this->marque = $marque;
        $this->modele = $modele;
    }

    public function getMarque(){
        return $this->marque;
    }

    public function getModele(){
        return $this->modele;
    }

    public function getInfo(){
        return $this->marque." ".$this->modele;
    }
}

class VoitureElec extends Voiture
{
    private $autonomie;

    public function __construct(string $marque,string $modele,int $autonomie){
        Voiture::__construct($marque,$modele);
        $this->autonomie = $autonomie;
    }

    public function getInfo(){
        return $this->getMarque()." ".$this->getModele()." ".$this->autonomie;
    }
}

?>