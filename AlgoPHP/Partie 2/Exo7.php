<h1>Exercice 7</h1>

<p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser dans le tableau associatif si la case est cochée ou non.</p>

<h2>Résultat</h2>

<?php

$elements = array(
    "Choix 1"=>true,
    "Choix 2"=>false,
    "Choix 3"=>true
);

genererCheckbox($elements);

function genererCheckbox($elements){
    echo '<form action="reponse.php" method="GET">';
    foreach($elements as $choix => $statut){
        if($statut == true){
            echo '<input type="checkbox" name="'.$choix.'" id="'.$choix.'" checked="'.$statut.'"/>'.$choix.'<br>';
        }else{
            echo '<input type="checkbox" name="'.$choix.'" id="'.$choix.'" />'.$choix.'<br>';
        }
    }
    echo '</form>';
}

?>