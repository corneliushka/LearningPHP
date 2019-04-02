# SQL

La methode initiale dans la creation des database est le CRUD, 
CREATE : ajouter une rangee
READ : selectionner une ou plusieurs rangees
UPDATE : modifier l'info stockee dans une rangee
DELETE : effacer une rangee

## SYNTAXE 

SELECT 
    colonneX | * 

FROM 
    nom_de_la_colonne 

WHERE (la partie conditionnelle),
    = : egal
    > : plus grand que 
    < : plus petit que 
    >= : plus grand ou egal a 
    <= : plus petit ou egal a 
    <> : different de 
    % / LIKE  "Ar%" 

ORDER BY 
    colonneY ASC/DESC 


LIMIT 0, 10 (pour donner les 10 premiers resultats)


BETWEEN 
    value1 AND value2
    value1 OR value2 
;

CONCAT (firstname, " ", lastname, " ", age)






### INSERT INTO

Pour inserer des enregistrements dans une table.
-------------------------
INSERT INTO nom_de_la_table
	(colonne1, colonne2, colonne3... dernière_colonne)
VALUES
	(value_colonne_1, value_colonne2, ... value_dernière_colonne)
;


EX: 
    INSERT INTO Météo
        (ville, haut, bas)
    VALUES
        ('Arlon', 34, 11)
    ;
-------------------------

### UPDATE 
-------------------------

UPDATE nom_de_la_table
SET nom_de_colonne = "nouvelle valeur"
WHERE nom_de_colonne OPERATEUR "valeur"
	[and|or nom_de_colonne OPERATEUR "value"];
[ ] = optionnel
-------------------------

### DELETE 
-------------------------
DELETE from nom_de_la_table
WHERE nom_de_colonne OPERATEUR "valeur"
[and|or "nom_de_colonne" OPERATEUR "valeur"];

[ ] = optionnel
Note: n'oublie pas la clause WHERE quand tu DELETE, sinon TOUTES les rangées de la table seront effacées!
-------------------------

## CREATION de TABLE + configuration MySQL

[TUTO](https://www.a2hosting.com/kb/developer-corner/mysql/managing-mysql-databases-and-users-from-the-command-line)

Une fois LAMP et MySQL installe sur la machine, 
Se mettre en ROOT (terminal $~ sudo -i) et aller sur MySQL (mysql -u root -p).
Donner les privileges, en faisant le remplacement username et password.
(GRANT ALL PRIVILEGES ON *.* TO 'username'@'localhost' IDENTIFIED BY 'password';) 
Pour se log a nouveau sur MySQL via le terminal (mysql -u username -p)
Pour creer la database, continuer dans le terminal : (CREATE DATABASE dbname;)



## CREATE DATABASE nom_de_la_db;


## PHP Connect to Server

1) app avec les header (access control allow origin + content-type), pour autoriser d'autres apps de faire des reqetes sur le serveur
2) app avec le try/catch pour lier la connexion a la database avec les parametres de connexion (ddb connect)
3) GET : inserer la requete SQL pour recuperer les infos de la database (selection-from) et boucler sur la requete selectionne et la mettre dans un tableau. Ensuite faire un print des rangees avec json_encode. (cote serveur)
4) Ensuite, cote client on fera une requete httprequest pour recuperer les informations de la database. 
5) require header settings + require ddb connect, afin de declarer (statement) la preparation de la requete avec POST DATA + json_encode.




## Les fonctions mySQL

### UPPER - mettre la valeur en majuscules

Fonction SQL Upper avec un alias. 

SELECT UPPER(nom) AS nom_majuscule
FROM 
WHERE 

### LOWER - mettre la valeur en minuscules

SELECT LOWER(nom) AS nom_minuscule
FROM
WHERE

### LENGTH - afficher la longueur en caracteres de la valeur

SELECT LENGTH(nom) AS longueur 
FROM 
WHERE 

### AVERAGE - afficher la moyenne de toutes les valeurs nombres d'une colonne 

SELECT AVG(nom) AS prix_moyen
FROM
WHERE 

### COUNT - afficher le nombre des lignes de la table / d'un certain type / grouper par categorie 

SELECT COUNT(nom)
FROM 
WHERE nom="quelquechose" // afficher le nombre d'un type specifique
...or...
GROUP BY nom
LIMIT 0,30  

### HAVING - le "where" des categories 

Ressemble a une clause WHERE mais se place apres GROUP BY (s'execute sur les categories)

SELECT AVG(prix) AS prix_moyen
FROM 
GROUP BY machin
HAVING prix_moyen <= 10
ORDER BY prix_moyen 
LIMIT 0,30 


### 