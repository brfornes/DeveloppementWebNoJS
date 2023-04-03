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
        $results_array = connec_db("SELECT libelle, detail, prix_ttc, image, id, id_tva FROM article WHERE id_categorie=$id_cat");
        //1. On vérifie que le tableau en parametre n'est pas vide
        if (count($results_array) == 0) {
            echo "Aucun résultat trouvé";
            return;
        }
        $i = 0;
        foreach($results_array as $row){
            $image = $row['image'];
            $libelle = $row['libelle'];
            $detail = $row['detail'];
            $prix = $row['prix_ttc'];
            $id = $row['id'];
            //print_r($results_array);
?>

            <div class="div_element_jeu">
                <div class="div_jeu_image">
                    <img src="../img/articles/<?php echo($image);?>" />
                </div>
                <div class="div_jeu_text">
                    <h3><?php echo($libelle);?></h3>
                    <p><span class="details"><?php echo(test_strlen($detail));?></span></p>
                    <p><span class="prix"><?php echo($prix);?> €</span></p>
                    <form action="#" method="post" class="">
                        <button class="bouton" type="submit" name="ajouter_article_<?php echo ($id); ?>">Commander</button>
                    </form>
                </div>
            </div>

<?php
            if (isset($_POST['ajouter_article_'.$id])) {
                ajout_article_bd_panier($id,$prix);
            }
        }
    }

    function afficher_panier(){
        $results_array = connec_db("SELECT a.libelle, p.quantite, p.prix_ttc 
        FROM panier_article p 
        INNER JOIN article a ON p.id_article = a.id");


        if (count($results_array) == 0) {
            echo "Aucun résultat trouvé";
            return;
        }

        foreach($results_array as $row){
            $libelle = $row['libelle'];
            $quantite = $row['quantite'];
            $prix = $row['prix_ttc'];
            $prix_total = $quantite*$prix;
            
            echo("<li>".$libelle." ".$quantite." x ".$prix." = ".$prix_total."</li>");

?>

<?php 
        }
    }


    function ajout_article_bd_panier($id,$prix){
        ajout_suppression_db("INSERT INTO panier_article values(1,$id,1,0,0,$prix)");
    }

    function flush_panier(){
        ajout_suppression_db("DELETE FROM panier_article WHERE panier_article.id_panier = 1");
    }
?>