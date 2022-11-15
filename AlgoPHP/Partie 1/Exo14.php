<h1>Exercice 14</h1>

<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).</p>

<h2>Résultat</h2>

<?php

$date = new DateTimeImmutable("1985-01-17");
$origine = new DateTimeImmutable("2022-11-15");
$interval = $date->diff($origine);

echo $interval->format('Age de la personne : %y ans %m mois %d jours');

?>