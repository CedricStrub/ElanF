<h1>Exercice 4</h1>

<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.</p>

<h2>Résultat</h2>

<?php

$phrase = "Engage le jeu que je le gagne";
$lwrPhrase = strtolower($phrase);
$noSpaceLwrPhrase = str_replace(" ","",$lwrPhrase);
$revNSLP = strrev($noSpaceLwrPhrase);

if($noSpaceLwrPhrase == $revNSLP){
    echo "<< $phrase >> est un palindrome";
} else {
    echo "<< $phrase >> n'est pas un palindrome";
}

?>