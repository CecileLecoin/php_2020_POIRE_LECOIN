<html>
    <header>
        <link rel="stylesheet" href="../visuel/stylesheet.css" />
    </header>

    <head>
        <title>Inscription rédacteur</title>
    </head>

    <body>

        <form method="post" action="../control/creationRedacteurBDD.php">
            <label >Nom :</label>
            <input type="text" name="nom" size="45" maxlength="60" required>

            <br /><br />

            <label >Prénom :</label>
            <input type="text" name="prenom" size="45" maxlength="60" required>

            <br /><br />

            <label >Mail :</label>
            <input type="email" name="mail" class="info" size="45" maxlength="60" placeholder="Exemple : exemple@exemple.com"required>

            <br /><br />

            <label >Mot de passe :</label>
            <input type="password" name="mdp" class="info" size="35" maxlength="30" required>

            <br /><br />
            <input type="submit" name="valider" value="Valider">

        </form>
        <?php 
        
        ?>
    </body>


</html>