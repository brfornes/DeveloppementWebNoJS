<?php
    include("../structure/header.php");
    require("../db/databaseManagement.php");

    $id_famille = $_GET['categorie'];
?>

    <h2>CATEGORIE</h2>

    <div class="catalogue">
        <div><?php afficher_jeux_categorie($id_famille);?></div>
    </div>


<?php include("../structure/footer.php"); ?>