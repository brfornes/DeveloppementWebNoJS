<?php include("header.php"); ?>

    <h2>Enregistrement d'un utilisateur</h2>
    <form action="enregistre_utilisateur.php" method="post" class="form_inscription">
        <div>
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" autocomplete="on" placeholder="JACQUELIN">
        </div>
        <div>
            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" id="email" autocomplete="on" placeholder=":D">
        </div>
        <div>
            <label for="mdp">Mot de Passe</label>
            <input type="password" name="mdp" id="mdp" autocomplete="on" placeholder="coucou">
        </div>
        <div>
            <label for="sexe">Sexe</label>

        </div>
        <div>
            <input type="submit" value="S'enregistrer">
        </div>
    </form>


<?php include("footer.php"); ?>