<html>

    <head>
        <title>Inscription rédacteur</title>
    </head>

    <body>
        <?php session_start();
        $_SESSION['authBDD'] = !true;
        include_once "creationRedacteurBDD.php";
        ?>

        <form method="post" action="creationRedacteur">
            <label for="nom">Nom :</label>
            <input name="nom" size="45" maxlength="60" value="" required>

            <br /><br />

            <label for="prenom">Prénom :</label>
            <input name="prenom" size="45" maxlength="60" value="" required>

            <br /><br />

            <label for="mail">Mail :</label>
            <input type="email" name="mail" size="45" maxlength="60" placeholder="Exemple : exemple@exemple.com" value="" required>

            <br /><br />

            <label for="mdp">Mot de passe :</label>
            <input type="mdp" name="mdp" size="35" maxlength="30" value="" required>

            <br /><br />
            <input type="submit" name="valider" value="Valider">


        </form>
    </body>

</html>