<h1>Exercice 5</h1>

<p>POO Foot<br>
<br>
Soit une application qui gère des équipes de football<br>
Une équipe possède un nom (Paris Saint-Germain, Bayern Munich, Real Madrid, ...) <br>
et un ensemble de joueurs identifié par un prénom, un nom et une date de naissance<br>
Chaque équipe appartient à un pays (France, Espagne, Allemagne, ...) <br>
et chaque joueur a une nationalité (France, Espagne, Allemagne, ...)<br>
<br>
Un joueur peut jouer dans une ou plusieurs équipes dans sa carrière (avec une année de début de saison)<br>
Concevez le projet en POO de façon à :<br>
<br>
- lister toutes les équipes d'un pays<br>
    Ex : France --> PSG, OM, OL, RCSA, ...<br>
    <br>
- lister tous les joueur s d'une équipe (avec nom, prénom, âge et pays d'origine)<br>
    Ex : PSG --> Neymar JR (30 ans), Lionel Messi (35 ans), Kylian Mbappé (23 ans)<br>
    <br>
- lister toutes les équipes d'un joueur<br>
    Ex : Lionel Messi (FC Barcelone 2004, PSG 2021)<br></p>

<h2>Résultat</h2>

<?php

spl_autoload_register(function ($class_name) {

    require_once $class_name . '.php';

});

$p1 = new Pays("France");
$p2 = new Pays("Espagne");
$p3 = new Pays("Italie");
$p4 = new Pays("Allemagne");

$j1 = new Joueurs("Anelka","Nicolas","03/14/1979",$p1);
$j2 = new Joueurs("Barthez","Fabien","06/28/1971",$p2);
$j3 = new Joueurs("Blanc","Laurent","03/14/1965",$p4);

$e1 = new Equipes("Paris Saint-Germains",$p1);
$e2 = new Equipes("Olympique de Marseille",$p1);
$e3 = new Equipes("Racing club de Lens",$p1);

$d1 = new Debut("1992",$j1,$e1);
$d2 = new Debut("1989",$j1,$e2);
$d3 = new Debut("1991",$j2,$e1);
$d4 = new Debut("1993",$j3,$e1);
$d5 = new Debut("1995",$j2,$e2);

echo $p1->getInfo();
echo $e1->getInfo();
echo $j1->getInfo();

?>