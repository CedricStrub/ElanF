<h1>Exercice 10</h1>

<p>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui <br>
affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 1€.</p>

<h2>Résultat</h2>

<?php

$aPayer = 152;
$verse = 200;
$reste = $verse - $aPayer;
$billet = [0,0,0,0];

while ($reste != 0){
    switch($reste){
        case $reste >= 10: $billet[0]++ ; $reste = $reste - 10; break;
        case $reste >= 5: $billet[1]++ ; $reste = $reste - 5; break;
        case $reste >= 2: $billet[2]++ ; $reste = $reste - 2; break;
        case $reste >= 1: $billet[3]++ ; $reste = $reste - 1; break;
    }
}

echo "Rendue de monnaie :<br>";
echo "$billet[0] billet de 10 € - $billet[1] billet de 5 € - $billet[2] pièce de 2 € - $billet[3] pièce de 1 €";

?>