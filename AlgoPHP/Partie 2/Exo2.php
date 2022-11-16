<h1>Exercice 2</h1>

<p>Soit le tableau suivant:<br>
    $capitales= array ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");<br>
    <br>
    Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays<br>
    s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) <br>
    grâce à une fonction personnalisée.<br>
    <br>
    Vous devrez appeler la fonction comme suit: afficherTableHTML($capitales);</p>

<h2>Résultat</h2>

<html>
<style>
table, th, td {
    border:1px solid black;
    border-collapse: collapse;
    padding-left: 10px;
    padding-right: 10px;
}

th {
    text-align: left;
}
</style>
<body>

<?php

$capitales = array(
    "France"=>"Paris",
    "Allemagne"=>"Berlin",
    "USA"=>"Washington",
    "Italie"=>"Rome"
);

echo '<table>';

echo afficherTableHTML($capitales);

echo '</table>';

function afficherTableHTML($capitales){
    echo '<tr><th>Pays</th><th>Capitale</th></tr>';
    foreach($capitales as $pays => $capitale){
        echo '<tr>';
        echo '<td>'.strtoupper($pays).'</td>';
        echo '<td>'.$capitale.'</td>';
        echo '</tr>';
    }

}

?>

</body>
</html>

