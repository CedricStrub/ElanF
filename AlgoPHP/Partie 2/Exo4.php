<h1>Exercice 4</h1>

<p>A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra <br>
le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un <br>
nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).<br>
<br>
On admet que l’URL de la page Wikipédia de la capitale adopte la forme:<br>
https://fr.wikipedia.org/wiki/<br>
<br>
Le tableau passé en argument sera le suivant:<br>
$capitales= array ("France"=>"Paris","Allemagne"=>"Berlin",<br>
"USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid");</p>

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
    echo '<tr><th>Pays</th><th>Capitale</th><th>Capitale</th>lien wiki</tr>';
    
    foreach($capitales as $pays => $capitale){
        $lien = "https://fr.wikipedia.org/wiki/".$capitale;
        echo '<tr>'.'<td>'.strtoupper($pays).'</td>'.'<td>'.$capitale.'</td>'.'<td>'.'<a href='.$lien.' target="_blank">Lien</a>'.'</td>'.'</tr>';
    }

}
?>

</body>
</html>