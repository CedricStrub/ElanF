<h1>Exercice 6</h1>

<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau de valeurs.</p>

<h2>Résultat</h2>

<?php

$elements = array("Monsieur","Madame","Mademoiselle");

alimenterListeDeroulante($elements);

function alimenterListeDeroulante($elements){
    echo '<form><select name="titre">';
    foreach($elements as $titre){
        echo '<option>'.$titre.'</option>';
    }
    echo '</select></form>';

}

?>
