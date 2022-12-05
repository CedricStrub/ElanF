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

