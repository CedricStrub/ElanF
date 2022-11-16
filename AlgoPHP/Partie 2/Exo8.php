<h1>Exercice 8</h1>

<p>Soit l’URL suivante: http://my.mobirise.com/data/userpic/764.jpg<br>
Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.</p>

<h2>Résultat</h2>

<?php

$url = "http://my.mobirise.com/data/userpic/764.jpg";

repeterImage($url,4);

function repeterImage($url,$nb){
    for($i=1;$i<=$nb;$i++){
        echo '<img src="'.$url.'"/>';
    }
}
?>
