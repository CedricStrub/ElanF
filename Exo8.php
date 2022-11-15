<h1>Exercice 8</h1>

<p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la forme:</p>

<h2>Résultat</h2>

<?php

$nb = 5;
echo "Table de $nb en for :<br>";

for($i = 1; $i <= 10; $i++) {
    $total = $i * $nb;
    echo "$i x $nb = $total <br>";
}

echo "<br>Table de $nb en while :<br>";

$j = 1;
while($j <= 10){
    $total = $j * $nb;
    echo "$j x $nb = $total <br>";
    $j++;
}

?>