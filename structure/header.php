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

    <?php
        if(!strcmp(basename($_SERVER['PHP_SELF']), "index.php")){
        $chemin = "./";
        }
        else {
        $chemin = "../";
        }
    ?>

    <!-- Apparence du site (css et icone) -->
    <link rel="stylesheet" type="text/css" href="<?php echo($chemin);?>css/style.css" media="all">
    <link rel="shortcut icon" type="image/png" href="<?php echo($chemin);?>img/ico/icone.png"/>
</head>

<body>
    <div class="page">

    <!-- HEADER (titre et authentification) -->
    <header>
        <!-- Titre -->
        <div class="titre">
            <div>
                <img src="<?php echo($chemin);?>img/site/icone-site.gif" alt="Logo du site">
                <h1><a href="<?php echo($chemin);?>index.php">JEUX VIDÉOS</a></h1>
            </div>
        </div>

        <!-- Authentification et lien d'inscription (form) -->
        <div class="auth">
            <form action="<?php echo($chemin);?>pages/inscription.php" method="post" class="">
                <div class="champs_form">
                    <div>
                        <label for="email">Adresse mail</label>
                        <input type="text" name="email" id="email" autocomplete="on" placeholder="truc@blabla.fr">
                    </div>
                    <div>
                        <label for="mdp">Mot de Passe</label>
                        <input type="password" name="mdp" id="mdp" autocomplete="on" placeholder="coucou">
                    </div>
                </div>
                <div>
                    <button class="bouton" type="submit">Se connecter</button>
                    <button class="bouton">S'inscrire</button>
                </div>
            </form>
        </div>
    </header>

    <!-- SECTION (corps changeant du site) -->
    <section>

        <!-- Section gauche (menu, inscription... une apparence par fichier) -->
        <article>