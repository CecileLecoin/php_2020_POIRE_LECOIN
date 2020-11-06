<html>
	<head>
		<meta charset="utf-8" />
		<title>Authentification</title>
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/auth.css" />
		<?php
            require_once 'index.php';
            include_once 'query.php';
			include_once 'article.php';
			?>
	</head>
	<body>
        <?php session_start();
        $_SESSION['authBDD']=!true;
        ?>

        <form name="add" method="post" action="authBDD.php">
				<label for="identifiant">Identifiant :</label>
				<input type="email" id="identifiant" name="identifiant" size="45" maxlength="60" placeholder="Exemple : caramel@caramail.com" value="" required>

                <br /><br />

                <label for="mdp">Mot de passe :</label>
				<input type="" id="mdp" name="mdp" size="35" maxlength="30" value="" required>
				<br /><br />
                <input type="submit" name="valider" value="Valider">


        </form>




    </body>
</html>