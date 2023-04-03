<?php
    include("../structure/header.php");
    require("../db/databaseManagement.php");

    $id_famille = $_GET['categorie'];
?>

    <?php include("../pages/goback.php"); ?>

    <div class="catalogue">
        <?php afficher_jeux_categorie($id_famille);?>
    </div>


<?php include("../structure/footer.php"); ?>