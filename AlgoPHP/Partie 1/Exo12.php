<h1>Exercice 12</h1>

<p>A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée (tableau  contenant  clé  et  valeur),  <br>
dire  bonjour  aux  différentes  personnes  dans  leur  langue respective (français ➔«Salut», anglais ➔«Hello», espagnol ➔«Hola»)</p>

<h2>Résultat</h2>

<?php

$tableau = [
    "Mickaël" => "FRA",
    "Virgile" => "ESP",
    "Marie-Claire" => "ENG"
];

echo disBonjour($tableau);

echo "<br>Dans l'ordre alphabetique :<br><br>";

ksort($tableau);

echo disBonjour($tableau);

function disBonjour($tableau){
    foreach($tableau as $prenom => $langue){
        if($langue == "FRA"){
            echo "Salut $prenom <br>";
        }elseif($langue == "ESP"){
            echo "Hola $prenom <br>";
        }elseif($langue == "ENG"){
            echo "Hello $prenom <br>";
        }else{
            echo "Désolé $prenom je ne connais pas ta langue";
        }
    }
}

?>