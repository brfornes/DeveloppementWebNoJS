<?php

function connec_db($sql){
    // 1. on se connecte à MariaDB
    $db = mysqli_connect('localhost', 'jeux-videos', 'IsImA2021_/%', 'jeux-videos', 3307) //jeux-videos, IsImA2021_/%
    or die('Erreur SQL : '. mysqli_error($db));
    $db -> query ('SET NAMES UTF8');
    $result = mysqli_query($db,$sql);

    //2. on recupère le résultat de la query dans un array pour le retourner
    $results_array = array();
    while($row = mysqli_fetch_assoc($result)) {
        $results_array[] = $row;
    }

    mysqli_close($db);

    return $results_array;
}
?>