<?php 
    include("./structure/header.php");
    require("./db/databaseManagement.php");
?>

    <h2>CONTENU</h2>

    <div class="catalogue">
        <div><?php afficher_categories();?></div>
    </div>


<?php include("./structure/footer.php"); ?>