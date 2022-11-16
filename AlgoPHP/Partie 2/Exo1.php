<h1>Exercice 1</h1>

<p>Créer une fonction personnalisée convertirMajRouge()permettant de transformer une chaîne de<br>
caractère passée en argument en majuscules et en rouge.<br>
<br>
Vous devrez appeler la fonction comme suit: convertirMajRouge($texte);</p>

<h2>Résultat</h2>

<?php

$phrase = "Mon texte en paramètre";
$cherche = "è";
$remplace = "e";

function convertirMajRouge($texte){
    $cherche = "è";
    $remplace = "e"; 
    $texte = str_replace($cherche,$remplace,$texte);
    return '<span style = "color:red">'.strtoupper($texte).'</span>';
}

echo convertirMajRouge($phrase);

?>