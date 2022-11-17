<h1>Exercice 2</h1>

<p>Vous êtes chargé(e) de créer un projet orienté objet permettant de gérer des livres et leurs auteurs respectifs.<br>
<br>
Les livres sont caractérisés par un titre, un nombre de pages, une année de parution, un prix et un auteur. <br>
Un auteur comporte un nom et un prénom.<br>
<br>
Une méthode toString() sera appréciée dans chacune de vos classes.<br>
<br>
Vous implémenterez une méthode afficherBibliographie() qui permettra d’afficher la bibliographie complète d’un auteur :</p>

<h2>Résultat</h2>

<?php

spl_autoload_register(function ($class_name) {

    require_once $class_name . '.php';

});

$a1 = new Auteur("King","Stephen");

$l1 = new Livre("Ca",1138,1986,20,$a1);
$l2 = new Livre("Simetierre",374,1983,15,$a1);
$l3 = new Livre("Le Fléau",823,1978,14,$a1);
$l4 = new Livre("Shining",447,1977,16,$a1);

echo '<div style="text-align: center;">';
echo '<div style="display: inline-block; text-align: left;">';
echo $a1->afficherBibliographie();
echo '</div></div>';

?>