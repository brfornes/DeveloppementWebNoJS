<?php
    require("connexionDb.php");

    function afficher_categories(){
        //1. On appelle la fonction qui va chercher les categories dans la bd
        $results_array = connec_db("SELECT id, libelle, image FROM categorie");
        //1. On vérifie que le tableau en parametre n'est pas vide
        if (count($results_array) == 0) {
            echo "Aucun résultat trouvé";
            return;
        }

        //2. Affichage de chaque résultat
        foreach($results_array as $row){
            $id_famille = $row['id'];
            $libelle = $row['libelle'];
            $image_nom = $row['image'];
       
?>

    <div class="div_element_catalogue">
        <div class="div_image">
            <img src="./img/categories/<?php echo($image_nom);?>" />
        </div>
        <div class="div_titre">
            <a href="./pages/liste_jeux.php?categorie=<?php echo($id_famille);?>"><h3><?php echo"Jeux de ".($libelle);?></h3></a>
        </div>
    </div>

<?php
       }
    }

    function test_strlen($text){
        $max_len = 30;
        $newtext = "";
        if (strlen($text) > $max_len){
            $newtext = substr($text, 0, $max_len) . "...";
        }
        else {
          $newtext = $text;
        }
        return $newtext;
      }


    function afficher_jeux_categorie($id_cat){
        $results_array = connec_db("SELECT libelle, detail, prix_ttc, image FROM article WHERE id_categorie=$id_cat");
        //1. On vérifie que le tableau en parametre n'est pas vide
        if (count($results_array) == 0) {
            echo "Aucun résultat trouvé";
            return;
        }

        foreach($results_array as $row){
            $image = $row['image'];
            $libelle = $row['libelle'];
            $detail = $row['detail'];
            $prix = $row['prix_ttc'];
?>

            <div class="div_element_jeu">
                <div class="div_jeu_image">
                    <img src="../img/articles/<?php echo($image);?>" />
                </div>
                <div class="div_jeu_text">
                    <h3><?php echo($libelle);?></h3>
                    <p><span class="details"><?php echo(test_strlen($detail));?></span></p>
                    <p><span class="prix"><?php echo($prix);?> €</span></p>
                    <button class="bouton">Commander</button>
                </div>
            </div>

<?php
        }
    }
?>