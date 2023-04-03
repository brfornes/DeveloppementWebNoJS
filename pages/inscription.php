<?php include("../structure/header.php");
require("../db/databaseManagement.php"); ?>

    <h2>Enregistrement d'un utilisateur</h2>
    <form action="enregistre_utilisateur.php" method="post" class="form_inscription">
        <div>
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" autocomplete="on" placeholder="NOM">
        </div>
        <div>
            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" id="email" autocomplete="on" placeholder="Prénom">
        </div>
        <div>
            <label for="mdp">Mot de Passe</label>
            <input type="password" name="mdp" id="mdp" autocomplete="on" placeholder="motdepasse">
        </div>
        <div>
            <input type="submit" value="S'enregistrer" class="bouton">
        </div>
    </form>


<?php include("../structure/footer.php"); ?>