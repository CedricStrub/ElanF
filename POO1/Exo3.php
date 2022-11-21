<h1>Exercice 3</h1>

<p>Vous avez en charge de gérer différentes entités autour de la thématique du cinéma.<br>
<br>
Les films seront caractérisés par leur titre, leur date de sortie en France, leur durée (en minutes)<br>
ainsi que leur réalisateur (unique, avec nom, prénom, sexe et date de naissance). Un résumé du film<br>
(synopsis) pourra éventuellement être renseigné. Chaque film est caractérisé par un seul genre<br>
cinématographique (science-fiction, aventure, action, ...).<br>
<br>
Votre application devra recenser également les acteurs de chacun des films. On désire connaître le<br>
nom, le prénom, le sexe et la date de naissance de l’acteur ainsi que le rôle (nom du personnage)<br>
joué par l’acteur dans le(s) film(s) concerné(s).<br>
<br>
Il serait intéressant d'utiliser la notion d'héritage entre classes dans cet exercice. A vous de le mettre<br>
en place correctement !<br>
<br>
Attention, le rôle (par exemple James Bond) ne doit être instancié qu'une seule fois (dans la mesure<br>
où ce rôle a été incarné par plusieurs acteurs.)<br>
<br>
On doit pouvoir :<br>
<br>
Lister la liste des acteurs ayant incarné un rôle précis (ex: les acteurs ayant joué le rôle de<br>
Batman : Michael Keaton, Val Kilmer, George Clooney, ...)<br>
<br>
Lister le casting d'un film (dans le film Star Wars Episode IV, Han Solo a été incarné par<br>
Harrison Ford, Luke Skywalker a été incarné par Mark Hamill, ...)<br>
<br>
Lister les films par genre (exemple : le genre SF est associé à X films : Star Wars, Blade<br>
Runner, ...)<br>
<br>
Lister la filmographie d'un acteur (dans quels films a-t-il joué ?)<br>
<br>
Lister la filmographie d'un réalisateur (quels sont les films qu'a réalisé ce réalisateur ?)</p>

<h2>Résultat</h2>

<?php

spl_autoload_register(function ($class_name) {

    require_once $class_name . '.php';

});


$re1 = new Real("Lambert","Hillyer","homme","07/08/1889");
$g1 = new Genre("super-héros");

$f1 = new Films("Batman","1943",260,"Batman, est un super-héros de fiction appartenant à l'univers de DC Comics.");

$ro1 = new Roles("Batman");
$a1 = new Acteurs("Lewis","Wilson","homme","01/28/1920");

$a1->addRole($ro1);
$f1->addReal($re1);
$f1->addGenre($g1);
$f1->addActeurs($a1);

echo $re1;
echo $g1;
echo $a1;
echo $ro1;
echo $f1;

?>