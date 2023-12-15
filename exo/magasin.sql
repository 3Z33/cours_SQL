/*Créer une base de donnée qui ce nomme magasin 
et qui posséde trois table

Une table client avec 6 colonne
id int 
prenom string
nom string
email string
ville string
password string
Id est primaire en incrémentation automatique

Une table commande avec 5 colonnes
id int
client id int
date_achat date
reference string
cache prix total nombre à virgule
Id est primaire en incrémentation automatique

Une table produit avec 4 colonnes
id int
nom string
quantité nombre à virgule
prix nombre à virgule
Id est primaire en incrémentation automatique

 
 
 */


 CREATE DATABASE "magasin";
 USE magasin;

 CREATE TABLE "client" (
    id int,
    prenom string,
    nom string,
    email string,
    ville string,
    password string,

);

CREATE TABLE "commande" (
    id int,
    client id int,
    nom string,
    email string,
    ville string,
    password string,
    
);