<?php
require_once "lib/config.php";
require_once  "lib/recipe.php";
$pdo = new PDO('mysql:dbname=mamie_recette;host=localhost;charset=utf8mb4', 'root', '');
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="override-bootstrap.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <title>mamieRecette</title>
</head>
<body>
<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <div>
            <a href="index.php" class="d-inline-flex link-body-emphasis text-decoration-none">
                <img src="asset/images/recette-de-rougail-de-tomates-au-piment.jpg" class="logo" alt="logo du site">
            </a>
        </div>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="index.php" class="nav-link px-2 link-secondary">Accueil</a></li>
            <li><a href="recette.php" class="nav-link px-2">Nos recettes</a></li>
            <li><a href="ajout_modification_recette.php" class="nav-link px-2">Ajouter ou modifier une recette</a></li>
            <li><a href="apropos.php" class="nav-link px-2">A propos</a></li>
            <li><a href="faq.php" class="nav-link px-2">FAQs</a></li>
            <li><a href="#" class="nav-link px-2">Nous contacter</a></li>
        </ul>

        <div class="col-md-3 text-end">
            <button type="button" class="btn btn-outline-primary me-2">Login</button>
            <button type="button" class="btn btn-primary">Sign-up</button>
        </div>
    </header>
</div>