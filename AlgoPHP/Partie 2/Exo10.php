<h1>Exercice 10</h1>

<p>En utilisant l’ensemble des fonctions personnalisées crées précédemment,  créer  un  formulaire complet  <br>
qui  contient  les  informations  suivantes:  champs  de  texteavec  nom,  prénom,  adresse  e-mail, ville, sexe <br>
et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation: <br>
«Développeur Logiciel»,«Designer web», «Intégrateur» ou «Chef de projet».<br>
<br>
Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement de validation (submit).</p>

<h2>Résultat</h2>

<?php

$info = array("Nom","Prenom","E-Mail","Ville","Sexe");
$formation = array("Développeur Logiciel","Designer web","Intégrateur","Chef de projet");

dessineMoiUnFormulaire($info,$formation);

function dessineMoiUnFormulaire($info,$formation){
    echo '<form action="reponse.php" method="GET">';
    afficherInput($info);
    echo '<br>';
    alimenterListeDeroulante($formation);
    echo '<br><br><input type="submit" value="Submit" />';
    echo '</form>';
}

function afficherInput($nomsInput){
    foreach($nomsInput as $champs){
        echo $champs.'<br><input type="text" name="'.$champs.'"><br>';
    }
}

function alimenterListeDeroulante($elements){
    echo '<select name="titre">';
    foreach($elements as $titre){
        echo '<option>'.$titre.'</option>';
    }
    echo '</select>';

}

?>