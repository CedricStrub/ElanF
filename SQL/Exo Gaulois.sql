1).
SELECT nom_lieu 
FROM lieu 
WHERE nom_lieu LIKE '%um'

2).
SELECT id_lieu, COUNT(*) 
FROM personnage 
GROUP BY id_lieu 
ORDER BY COUNT(*) DESC

3).
SELECT nom_personnage, specialite.nom_specialite, adresse_personnage, lieu.nom_lieu
FROM personnage, specialite , lieu 
WHERE personnage.id_specialite = specialite.id_specialite AND personnage.id_lieu = lieu.id_lieu 
ORDER BY lieu.nom_lieu ASC, nom_personnage ASC

4).
SELECT COUNT(*), specialite.nom_specialite
FROM personnage, specialite 
WHERE personnage.id_specialite = specialite.id_specialite 
GROUP BY specialite.nom_specialite
ORDER BY COUNT(*) DESC

5).
SELECT nom_bataille, date_bataille, lieu.nom_lieu
FROM bataille, lieu 
WHERE bataille.id_lieu = lieu.id_lieu
ORDER BY date_bataille ASC

6).
SELECT nom_potion, SUM(composer.qte * ingredient.cout_ingredient)
FROM potion, composer, ingredient
WHERE potion.id_potion = composer.id_potion AND composer.id_ingredient = ingredient.id_ingredient
GROUP BY nom_potion 
ORDER BY SUM(composer.qte * ingredient.cout_ingredient) DESC

7).
SELECT ingredient.nom_ingredient ,ingredient.cout_ingredient, composer.qte, nom_potion
FROM potion, composer, ingredient
WHERE nom_potion = 'Santé' AND potion.id_potion = composer.id_potion AND composer.id_ingredient = ingredient.id_ingredient
GROUP BY ingredient.nom_ingredient

8).
SELECT personnage.nom_personnage, nom_bataille, SUM(prendre_casque.qte)
FROM bataille, prendre_casque, personnage
WHERE nom_bataille = 'Bataille du village gaulois' AND bataille.id_bataille = prendre_casque.id_bataille AND prendre_casque.id_personnage = personnage.id_personnage
GROUP BY personnage.nom_personnage
ORDER BY SUM(prendre_casque.qte) DESC
LIMIT 1

9).
SELECT personnage.nom_personnage, SUM(dose_boire)
FROM boire, personnage
WHERE boire.id_personnage = personnage.id_personnage
GROUP BY personnage.nom_personnage 
ORDER BY SUM(dose_boire) DESC

10).
SELECT nom_bataille, SUM(prendre_casque.qte)
FROM bataille, prendre_casque
WHERE bataille.id_bataille = prendre_casque.id_bataille
GROUP BY nom_bataille 
ORDER BY SUM(prendre_casque.qte) DESC

11).
SELECT type_casque.nom_type_casque, SUM(cout_casque)
FROM casque, type_casque
WHERE casque.id_type_casque = type_casque.id_type_casque
GROUP BY type_casque.nom_type_casque
ORDER BY SUM(cout_casque) DESC

12).
SELECT potion.nom_potion
FROM ingredient, composer, potion
WHERE nom_ingredient = 'Poisson frais' AND ingredient.id_ingredient = composer.id_ingredient AND composer.id_potion = potion.id_potion

13).
SELECT nom_lieu , COUNT(personnage.nom_personnage)
FROM lieu, personnage
WHERE lieu.id_lieu = personnage.id_lieu AND nom_lieu != 'Village gaulois' 
GROUP BY nom_lieu 
HAVING COUNT(personnage.nom_personnage)=(
	SELECT MAX(a.cnt) 
	FROM (
		SELECT COUNT(personnage.nom_personnage) AS cnt 
		FROM personnage, lieu 
		WHERE lieu.id_lieu = personnage.id_lieu AND nom_lieu != 'Village gaulois' 
		GROUP BY nom_lieu) 
	AS a)

14).
SELECT nom_personnage
FROM personnage
EXCEPT (
	SELECT personnage.nom_personnage 
	FROM boire, personnage
	WHERE boire.id_personnage = personnage.id_personnage  
	GROUP BY personnage.nom_personnage
	)

15).
SELECT nom_personnage
FROM personnage
EXCEPT (
	SELECT personnage.nom_personnage
	FROM autoriser_boire, personnage, potion
	WHERE autoriser_boire.id_personnage = personnage.id_personnage AND autoriser_boire.id_potion = potion.id_potion AND potion.nom_potion = 'Magique' 
	)

A).
INSERT INTO personnage VALUES (0,'Champdeblix','ferme Hantassion','indisponible.jpg',6,12)

B).
INSERT INTO autoriser_boire
SELECT id_potion, id_personnage
FROM personnage,potion
WHERE nom_personnage = 'Bonemine' AND nom_potion = 'Magique'

C).
DELETE FROM  casque
WHERE id_casque = ANY (
	SELECT id.casques
	FROM (
		SELECT id_casque AS casques
		FROM casque, type_casque
		WHERE casque.id_type_casque = type_casque.id_type_casque AND type_casque.nom_type_casque = 'Grec'
		EXCEPT(
			SELECT casque.id_casque
			FROM prendre_casque, casque
			WHERE	prendre_casque.id_casque = casque.id_casque
		)
	)
	AS id
)

D).
UPDATE personnage
SET adresse_personnage = 'Prison', id_lieu = (
	SELECT lieu.id_lieu
	FROM lieu
	WHERE lieu.nom_lieu = 'Condate'
)
WHERE id_personnage = (
	SELECT id.perso
	FROM(
		SELECT id_personnage AS perso
		FROM personnage
		WHERE nom_personnage = 'Zérozérosix'
	)
	AS id
)

E).
DELETE FROM composer
WHERE id_potion = (
	SELECT id_potion
	FROM potion
	WHERE nom_potion = 'Soupe'
) AND id_ingredient = (
	SELECT id_ingredient
	FROM ingredient 
	WHERE nom_ingredient = 'Persil'
)

F).
UPDATE prendre_casque
SET id_casque = (
	SELECT id_casque
	FROM casque
	WHERE nom_casque = 'Weisenau'
)
WHERE id_personnage = (
	SELECT id_personnage
	FROM personnage
	WHERE nom_personnage = 'Obélix'
) AND id_bataille = (
	SELECT id_bataille
	FROM bataille
	WHERE nom_bataille = 'Attaque de la banque postale'
)