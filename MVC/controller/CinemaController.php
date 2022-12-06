<?php

namespace Controller;
use Model\Connect;

class CinemaController{

    public function listFilms(){
        $pdo = Connect::seConnecter();
        $requete = $pdo->query("
            SELECT titre, annee_sortie
            FROM film
        ");
        require "view/listFilms.php";
    }

    public function listActeur(){
        $pdo = Connect::seConnecter();
        $requete = $pdo->query("
            SELECT p.nom, p.prenom
            FROM acteur a
            INNER JOIN personne p ON a.id_personne = p.id_personne
        ");
        require "view/listActeur.php";
    }
}