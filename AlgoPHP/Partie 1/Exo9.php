<h1>Exercice 9</h1>

<p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.<br>
<br>
Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de plus de 20 ans,<br> 
alors celle-ci est imposable (sinon ce n’est pas le cas, «non imposable»).</p>

<h2>Résultat</h2>

<?php

$age = 32;
$sexe = "F";
$status = "";

if(gettype($age) == "double" || gettype($age) == "integer" ) {
    if($sexe == "F"){
        if($age <= 35 && $age >= 18){
            $status = "imposable";
        }else{
            $status = "non imposable";
        }
        echo "La personne est $status<br>";
    } elseif($sexe == "M"){
        if($age >= 20){
            $status = "imposable";
        }else{
            $status = "non imposable";
        }
        echo "La personne est $status<br>";
    }
    else{
        echo "Veuillez saisir un sexe valide !<br>";    
    }
} else {
    echo "Veuillez saisir un âge numérique !<br>";
}

?>