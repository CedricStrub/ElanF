<h1>Exercice 1</h1>

<p>Vous êtes chargé(e) de créer un projet orienté objet permettant de gérer des titulaires et leurs comptes bancaires respectifs.<br>
<br>
Un compte bancaire est composé des éléments suivants :<br>
<br>
Un libellé (compte courant, livret A, ...)<br><br>
Un solde initial<br>
Une devise monétaire<br>
Un titulaire unique<br>
<br>
Un titulaire comporte :<br><br>
Un nom<br>
Un prénom<br>
Une date de naissance<br>
Une ville<br>
L'ensemble de ses comptes bancaires.<br>
<br>
Sur un compte bancaire, on doit pouvoir :<br><br>
Créditer le compte de X euros<br>
Débiter le compte de X euros<br>
Effectuer un virement d'un compte à l'autre.<br>
<br>
On doit pouvoir :<br><br>
Afficher toutes  les  informations  d'un(e)  titulaire  (dont  l'âge)<br>
et  l'ensemble  des  comptes appartenant à celui(celle)-ci.<br>
<br>
Afficher  toutes  les  informations  d'un  compte  bancaire,  <br>
notamment  le  nom  /  prénom  du titulaire du compte.<br></p>

<h2>Résultat</h2>

<?php

spl_autoload_register(function ($class_name) {

    require_once $class_name . '.php';

});

$t1 = new Titulaire('john','Doe','02/05/1999','Rio');
$c1 = new Compte('Livret A',420,'€',$t1);
$c2 = new Compte('Compte Courant',69.69,'€',$t1);

$t1->virementCompte(50,$c1,$c2);


?>