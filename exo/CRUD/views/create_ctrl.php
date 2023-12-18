<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form method="POST">
    <label for="titre">Titre</label>
    <input type="text" id="titre" name="titre_du_livre">
    <label for="ISBN">ISBN</label>
    <input type="text" id="ISBN" name="ISBN_du_livre">
    <label for="resume">resume</label>
    <textarea id="resume" name="resume_du_livre" cols="10" rows="4"></textarea>

    <button type="submit">submit</button>
</form>


<?php

$bdd = new PDO('mysql:host=localhost;dbname=xxxxxxxx', 'Logan', 'azer');

$nom_livre = $_POST["titre_du_livre"];
$isbn_livre = $_POST["ISBN_du_livre"];
$resume_livre = $_POST["resume_du_livre"];


?>
    
</body>
</html>