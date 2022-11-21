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

$a1 = new Acteurs("Michael","Keaton","homme","09/05/1951");//batman
$a2 = new Acteurs("Kevin","Conroy","homme","11/30/1955");//batman
$a3 = new Acteurs("Val","Kilmer","homme","12/31/1959");//batman
$a4 = new Acteurs("Jack","Nicholson","homme","04/22/1937");//joker
$a5 = new Acteurs("Kim","Basinger","femme","12/08/1953");//Vicki Vale
$a6 = new Acteurs("Dany","DeVito","homme","11/17/1944");//le pingouin
$a7 = new Acteurs("Jim","Carrey","homme","01/17/1962");//Edward Nygma
$a8 = new Acteurs("Nicole","Kidman","femme","06/20/1967");

$re1 = new Real("Tim","Burton","homme","08/25/1958");
$re2 = new Real("Dany","DeVito","homme","11/17/1944");
$re3 = new Real("Joel","Schumacher","homme","08/29/1939");
$re4 = new Real("Nicole","kidman","homme","11/17/1944");

$g1 = new Genre("super-héros");
$g2 = new Genre("science-fiction");
$g3 = new Genre("Action");
$g4 = new Genre("Horreur");

$f1 = new Films("Batman","1989",126,"Batman, est un super-héros de fiction appartenant à l'univers de DC Comics.");
$f2 = new Films("Batman returns","1992",126,"Batman, est un super-héros de fiction appartenant à l'univers de DC Comics.");
$f3 = new Films("Batman forever","1995",126,"Batman, est un super-héros de fiction appartenant à l'univers de DC Comics.");
$f4 = new Films("Vol au dessus d'un nid de coucou","1975",133,"L’histoire est centrée sur R. P. McMurphy qui, en simulant, se fait interner dans un hôpital psychiatrique");
$f5 = new Films("l'etrange noel de mr jack","1993",76,"L'Étrange Noël de monsieur Jack (The Nightmare Before Christmas) est un film d'animation américain réalisé par Henry Selick, sorti en 1993. Il s'agit du quarante-et-unième long-métrage d'animation des studios Disney. ");

$ro1 = new Roles("Batman");
$ro2 = new Roles("Robin");
$ro3 = new Roles("Joker");
$ro4 = new Roles("Vicki Vale");
$ro5 = new Roles("Le Pingouin");
$ro6 = new Roles("Edward Nygma");
$ro7 = new Roles("Le Pingouin");



$c1 = new Casting($f1,$a1,$ro1);
$c2 = new Casting($f2,$a2,$ro1);
$c3 = new Casting($f3,$a3,$ro1);
$c4 = new Casting($f4,$a6,$ro5);
$c5 = new Casting($f4,$a7,$ro3);
$c6 = new Casting($f5,$a8,$ro4);
$c7 = new Casting($f5,$a2,$ro6);
$c8 = new Casting($f3,$a7,$ro6);
$c9 = new Casting($f5,$a5,$ro3);
$c10 = new Casting($f1,$a4,$ro3);
$c10 = new Casting($f1,$a5,$ro4);


$f1->addReal($re1);
$f2->addReal($re1);
$f3->addReal($re3);
$f4->addReal($re2);
$f5->addReal($re1);

$f1->addGenre($g1);
$f2->addGenre($g1);
$f3->addGenre($g1);

$f1->addActeurs($a1);
$f1->addActeurs($a2);
$f4->addActeurs($a7);
$f3->addActeurs($a7);

$ro1->addActeur($a1);
$ro1->addActeur($a2);
$ro1->addActeur($a3);

echo $ro1;
echo '<br>';
echo $f1;
echo '<br>';
echo $g1;
echo '<br>';
echo $a7;
echo '<br>';
echo $re1;
echo '<br>';


?>