<?php 
    include("./structure/header.php");
    require("./db/databaseManagement.php");
?>

    <div class="catalogue">
        <?php afficher_categories();?>
    </div>


<?php include("./structure/footer.php"); ?>