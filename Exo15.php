<h1>Exercice 15</h1>

<p>Créer une classe Personne (nom, prénom et date de naissance).<br>
Instancier 2 personnes et afficher leurs informations: nom, prénom et âge.</p>

<h2>Résultat</h2>

<?php

$date = new DateTimeImmutable("2022-11-15");

class Personne
{
    private $_nom;
    private $_prenom;
    private $_aniv;

    function __construct($nom, $prenom, $aniv)
    {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_aniv = $aniv;
    }

    public function getNom(){
        return $this->_nom;
    }
    function getPrenom(){
        return $this->_prenom;
    }
    function getAniv(){
        return $this->_aniv;
    }
    
}

$p1 = new Personne("DUPONT","Michel","1980-02-19");
$p2 = new Personne("DUCHEMIN","Alice","1985-01-17");

$aniv = new DateTimeImmutable($p1->getAniv());
$resultat = $date->diff($aniv);

echo $p1->getPrenom() . " " . $p1->getNom() . " a " . $resultat->format('%y') . " ans<br>";

$aniv = new DateTimeImmutable($p2->getAniv());
$resultat = $date->diff($aniv);

echo $p2->getPrenom() . " " . $p2->getNom() . " a " . $resultat->format('%y') . " ans";

?>