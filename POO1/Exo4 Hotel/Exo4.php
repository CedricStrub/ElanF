<h1>Exercice 4</h1>

<p>POO Hotel<br>
<br>
A partir de ces captures d’écran, réaliser l’application en POO permettant la gestion de réservations<br>
de chambres par des clients dans différents hôtels :<br></p>

<h2>Résultat</h2>

<style>

table{
    width: 80%;
    border-collapse: collapse;
    text-align: left;
}

table td,table th{
    border-bottom: 1px solid #5D5D5D;
    padding: 8px;
}

table tr:nth-child(even){
    background-color: #E5E5E5;
}

table tr:hover {
    background-color: #CCCCCC;
}

table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #CCCCCC;
  color: #797979;
}

p3{
    width: 35%;
    background-color: #E5E5E5;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: bold;
    font-size: 20px;
    display: block;
    border-radius: 10px;
    padding: 5px;

}

p4{
    width: fit-content;
    background-color: #1AD500;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 12px;
    display: block;
    border-radius: 5px;
    padding: 5px;
    margin-top: -15px;
}

div{
    width: fit-content;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 12px;
    display: block;
    border-radius: 10px;
    padding: 5px;
}

#occupe, div{
    background-color: #D50000;
}

#dispo, div{
    background-color: #1AD500;
}



</style>

<?php

spl_autoload_register(function ($class_name) {

    require_once $class_name . '.php';

});

$h1 = new Hotel("Hilton **** ","Strasbourg","10, route de la gare",67000,30);
$h2 = new Hotel("Regent **** ","Paris","61, rue dauphine",75006,20);

$cl1 = new Client("GIBELLO","Virgile");
$cl2 = new Client("MURMANN","Micka");

$ch1 = new Chambre(1,1,false,100,$h1);
$ch2 = new Chambre(2,1,false,100,$h1);
$ch3 = new Chambre(3,2,false,120,$h1);
$ch4 = new Chambre(4,2,false,120,$h1);
$ch5 = new Chambre(5,2,false,120,$h1);
$ch6 = new Chambre(6,2,true,300,$h1);
$ch7 = new Chambre(7,2,true,300,$h1);
$ch8 = new Chambre(8,4,true,500,$h1);
$ch9 = new Chambre(9,4,true,500,$h1);

$ch11 = new Chambre(1,1,false,100,$h2);
$ch12 = new Chambre(2,1,false,100,$h2);
$ch13 = new Chambre(3,2,false,120,$h2);
$ch14 = new Chambre(4,2,true,120,$h2);
$ch15 = new Chambre(5,2,true,120,$h2);
$ch16 = new Chambre(6,2,true,300,$h2);
$ch17 = new Chambre(7,2,true,300,$h2);
$ch18 = new Chambre(8,4,true,500,$h2);
$ch19 = new Chambre(9,4,true,500,$h2);

$r1 = new Reservation($h1,$cl1,$ch17,"01/01/2021","01/02/2021");
//$r2 = new Reservation($h2,$cl1,$ch1,"01/03/2021","01/05/2021");
$r3 = new Reservation($h1,$cl2,$ch3,"02/05/2021","02/12/2021");
//$r4 = new Reservation($h2,$cl2,$ch12,"02/13/2021","02/15/2021");
$r5 = new Reservation($h1,$cl2,$ch4,"02/16/2021","02/30/2021");

echo $h1->getInfo();
echo $h1->getReservation();
echo $h2->getReservation();
echo $cl2->getInfo();
echo $h1->getStatuts();

?>