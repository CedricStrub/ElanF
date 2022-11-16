<h1>Exercice 11</h1>

<p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une chaîne de caractère représentant une date.</p>

<h2>Résultat</h2>

<?php

formaterDateFr("2018-02-23");


function formaterDateFr($date){
    $date = new DateTimeImmutable($date);
    $formatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::FULL, IntlDateFormatter::NONE);
    echo $formatter->format($date);
}

?>
