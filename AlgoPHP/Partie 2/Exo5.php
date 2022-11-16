<h1>Exercice 5</h1>

<p>Créer  une  fonction  personnalisée  permettant  de créer  un  formulaire  de  champs  de  texte  en précisant le nom des champs associés.</p>

<h2>Résultat</h2>

<?php

$nomsInput = array("Nom","Prénom","Ville");

afficherInput($nomsInput);

function afficherInput($nomsInput){
    echo '<form action="reponse.php" method="GET">';
    foreach($nomsInput as $champs){
        echo $champs.'<br><input type="text" name="'.$champs.'"><br>';
    }
    echo '</form>';
}

?>
