<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Site web noté</title>

    <!-- Métadonnées (description, auteur, mots-clefs...) -->
    <meta name="description" content="Description">
    <meta name="author" content="Marie Bornet">
    <meta name="keywords" lang="fr" content="ISIMA, site, web, html, css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Apparence du site (css et icone) -->
    <link rel="stylesheet" type="text/css" href="./css/style.css" media="all">
    <link rel="shortcut icon" type="image/png" href="./img/ico/icone.png"/>
</head>

<body>
    <div class="page">

    <!-- HEADER (titre et authentification) -->
    <header>
        <!-- Titre -->
        <div class="titre">
            <h1><a href="./index.php">TITRE</a></h1>
            <img src="./img/logo.png" alt="Logo du site">
        </div>

        <!-- Authentification et lien d'inscription (form) -->
        <div class="auth">
            <h2>AUTHENTIFICATION</h2>
            <form action="" method="post" class="">
                <div>
                    <label for="email">Adresse mail</label>
                    <input type="text" name="email" id="email" autocomplete="on" placeholder="truc@blabla.fr">
                </div>
                <div>
                    <label for="mdp">Mot de Passe</label>
                    <input type="password" name="mdp" id="mdp" autocomplete="on" placeholder="coucou">
                </div>
                <div>
                    <input type="submit" value="Se connecter">
                    <span> Pas de compte ? <a href="./inscription.php">Inscris-toi !</a></span>
                </div>
            </form>
        </div>
    </header>

    <!-- SECTION (corps changeant du site) -->
    <section>

        <!-- Section gauche (menu, inscription... une apparence par fichier) -->
        <article>