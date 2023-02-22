<?php

    function afficher_categories(){
        // 1. on se connecte à MariaDB
        $db = mysqli_connect('localhost', 'root', '', 'jeux-videos', 3307) //jeux-videos, IsImA2021_/%
        or die('Erreur SQL : '. mysqli_error($db));
        $db -> query ('SET NAMES UTF8');
        // 2. on exécute la requête
        $sql = 'SELECT libelle,image FROM categorie';
        $result = $db -> query( $sql ) or die('Erreur SQL : '.
        mysqli_error($db));
        // 3. on fait une boucle pour lire chaque enregistrement
        while($data = mysqli_fetch_array($result))
        {
            $libelle = $data['libelle'];
            $image_nom = $data['image'];
?>

    <div class="div_element_catalogue">
        <div class="div_image">
            <img src="./img/categories/<?php echo($image_nom);?>" />
        </div>
        <div class="div_titre">
            <h3><?php echo($libelle);?></h3>
        </div>
    </div>

<?php
        }
        // 4. on ferme la connexion à MariaDB
        mysqli_close($db);
    }
?>