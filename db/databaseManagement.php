<?php

    function afficher_categories(){
        // 1. on se connecte à MariaDB
        $db = mysqli_connect('localhost', 'jeux-videos', 'IsImA2021_/%', 'jeux-videos', 3307)
        or die('Erreur SQL : '. mysqli_error($db));
        $db -> query ('SET NAMES UTF8');
        // 2. on exécute la requête
        $sql = 'SELECT libelle,image,ordre_affichage FROM categorie';
        $result = $db -> query( $sql ) or die('Erreur SQL : '.
        mysqli_error($db));
        // 3. on fait une boucle pour lire chaque enregistrement
        while($data = mysqli_fetch_array($result))
        {
        // on affiche les informations de l'enregistrement en cours ici faire du html pour l'affichage

            echo $data['libelle'];
        }
        // 4. on ferme la connexion à MariaDB
        mysqli_close($db);
    }
?>