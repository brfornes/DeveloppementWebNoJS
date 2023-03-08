<?php
    require("connexionDb.php");

    function afficher_categories(){
        //1. On appelle la fonction qui va chercher les categories dans la bd
        $results_array = connec_categorie();
        //1. On vérifie que le tableau en parametre n'est pas vide
        if (count($results_array) == 0) {
            echo "Aucun résultat trouvé";
            return;
        }

        //2. Affichage de chaque résultat
       foreach($results_array as $row){
        $libelle = $row['libelle'];
        $image_nom = $row['image'];
       
?>

    <div class="div_element_catalogue">
        <div class="div_image">
            <img src="./img/categories/<?php echo($image_nom);?>" />
        </div>
        <div class="div_titre">
            <h3><?php echo"jeux de ".($libelle);?></h3>
        </div>
    </div>

<?php
       }
    }
?>