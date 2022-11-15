<h1>Exercice 6</h1>

<p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité d’articles,<br>
son prix hors taxe et un taux de TVA (exprimé en décimal. Ex: 20 % -> 0.2)</p>

<h2>Résultat</h2>

<?php

$nbArticles = 5;
$prixHT = 9.99;
$tva = 0.2;

$totalTTC = $nbArticles * $prixHT + $nbArticles * $prixHT * $tva;

echo "Prix unitaire de l'article : $prixHT €<br>";
echo "Quantité : $nbArticles<br>";
echo "taux de TVA : $tva<br>";
echo "Le montant de la facture à régler est de : $totalTTC €";

?>