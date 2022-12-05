a).
SELECT titre, YEAR(date_sortie), TIME_FORMAT(SEC_TO_TIME(duree*60),"%h:%i"), p.nom, p.prenom
FROM film f
INNER JOIN realisateur r ON f.id_realisateur = r.id_realisateur 
INNER JOIN personne p ON r.id_personne = p.id_personne
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
SELECT g.libelle, COUNT(c.id_genre) AS nbFilms
FROM classer c
INNER JOIN genre g ON c.id_genre = g.id_genre
GROUP BY c.id_genre
ORDER BY nbFilms DESC;

e).
SELECT personne.nom, personne.prenom, COUNT(film.id_film) AS nbFilms
FROM film
INNER JOIN realisateur ON film.id_realisateur = realisateur.id_realisateur
INNER JOIN personne ON realisateur.id_personne = personne.id_personne
GROUP BY personne.id_personne
ORDER BY nbFilms DESC;

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
HAVING COUNT(*) >= 3;