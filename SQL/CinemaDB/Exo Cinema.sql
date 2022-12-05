a).
SELECT * 
FROM film 
WHERE id_film = '0';

b).
SELECT titre 
FROM film 
WHERE duree > 135 
ORDER BY duree DESC;

c).
SELECT titre, personne.nom, personne.prenom, date_sortie 
FROM film 
INNER JOIN realisateur ON film.id_realisateur = realisateur.id_realisateur 
INNER JOIN personne ON realisateur.id_personne = personne.id_personne 
WHERE realisateur.id_realisateur = '2';

d).
SELECT genre.libelle, COUNT(genre.libelle)
FROM classer
INNER JOIN genre ON classer.id_genre = genre.id_genre
GROUP BY genre.libelle
ORDER BY COUNT(genre.libelle) DESC;

e).
SELECT personne.nom, personne.prenom, COUNT(film.titre)
FROM film
INNER JOIN realisateur ON film.id_realisateur = realisateur.id_realisateur
INNER JOIN personne ON realisateur.id_personne = personne.id_personne
GROUP BY personne.nom, personne.prenom
ORDER BY COUNT(film.titre) DESC;

f).
SELECT personne.nom, personne.prenom, personne.sexe, role.nom_du_personnage
FROM casting
INNER JOIN acteur ON casting.id_acteur = acteur.id_acteur
INNER JOIN personne ON acteur.id_personne = personne.id_personne
INNER JOIN role ON casting.id_role = role.id_role
WHERE id_film = '1';

g).
SELECT film.titre, role.nom_du_personnage, film.date_sortie
FROM casting
INNER JOIN film ON casting.id_film = film.id_film
INNER JOIN role ON casting.id_role = role.id_role
WHERE casting.id_acteur = '12'
ORDER BY film.date_sortie DESC

h).
SELECT id_personne
FROM realisateur
WHERE id_personne = ANY (
	SELECT id_personne
    from acteur
);

i).
SELECT date_sortie
FROM film 
WHERE YEAR(now()) - YEAR(date_sortie) <= 15;

j).
SELECT personne.sexe ,COUNT(personne.sexe)
FROM acteur
INNER JOIN personne ON acteur.id_personne = personne.id_personne
GROUP BY sexe;

k).
SELECT personne.nom, personne.prenom
FROM acteur
INNER JOIN personne ON acteur.id_personne = personne.id_personne
WHERE YEAR(now()) - YEAR(personne.date_de_naissance) >= 60;

l).
SELECT personne.nom, personne.prenom
FROM casting
INNER JOIN acteur ON casting.id_acteur = acteur.id_acteur
INNER JOIN personne ON acteur.id_personne = personne.id_personne
GROUP BY casting.id_acteur
HAVING COUNT(personne.nom) >= 3;