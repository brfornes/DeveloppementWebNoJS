<?php

function connec_db($id_connec){
    // 1. on se connecte à MariaDB
    $db = mysqli_connect('localhost', 'jeux-videos', 'IsImA2021_/%', 'jeux-videos', 3307) //jeux-videos, IsImA2021_/%
    or die('Erreur SQL : '. mysqli_error($db));
    $db -> query ('SET NAMES UTF8');
    // 2. selectionne la bonne requete
    switch($id_connec){
        case 1:
            $sql = "SELECT libelle, image FROM categorie";
            break;
        case 2:
            $sql = "SELECT libelle, detail, prix_ttc, image FROM article INNER JOIN categorie on categorie.id=article.id_categorie WHERE id_categorie=$id";
    }

    $result = mysqli_query($db,$sql);

    //3. on recupère le résultat de la query dans un array pour le retourner
    $results_array = array();
    while($row = mysqli_fetch_assoc($result)) {
        $results_array[] = $row;
    }

    mysqli_close($db);

    return $results_array;
}

function connec_games_from_cat($cat_id){

}





?>