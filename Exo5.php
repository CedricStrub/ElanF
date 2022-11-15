<h1>Exercice 5</h1>

<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.<br>
Attention, la valeur générée devra être arrondie à 2 décimales.</p>

<h2>Résultat</h2>

<?php

$francs = 100;
$taux = 6.55957;

$euro = round($francs / $taux, 2);

echo "Montant en francs: $francs<br>";
echo "$francs francs = $euro €";

?>