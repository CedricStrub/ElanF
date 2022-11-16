<h1>Exercice 9</h1>

<p>Créer une fonctionpersonnalisée permettant d’afficher des boutons radio avec un tableau de valeurs en paramètre("Monsieur","Madame","Mademoiselle").</p>

<h2>Résultat</h2>

<?php

$nomsRadio = array("Monsieur","Madame","Mademoiselle");

afficherRadio($nomsRadio);

function afficherRadio($nomsRadio){
    echo '<form>';
    foreach($nomsRadio as $titre){
        echo '<input type="radio" name="choix" value="on">'.$titre.'<br>';
    }
    echo '</form>';
}

?>
