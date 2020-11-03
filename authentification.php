<html>
	<head>
		<meta charset="utf-8" />
		<title>Authentification</title>
		<!--<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/auth.css" />-->
	</head>
	<body>
        <form name="add" method="post" action="auth.php">
				<label for="identifiant">Identifiant :</label>
				<input type="email" id="identifiant" name="identifiant" size="45" maxlength="60" placeholder="Exemple : caramel@caramail.com" value="">
				<span class="error">* <?php echo $idErr;?></span>
                
                <br /><br />
                
                <label for="mdp">Mot de passe :</label>
				<input type="mdp" id="mdp" name="mdp" size="35" maxlength="30" value="">
				<span class="error">* <?php echo $mdpErr;?></span>
				<br /><br />
				<input type="submit" name="valider" value="Valider">
        </form>
        
        <a href=<?php $path_to_home = './home.php';?> "retour accueil"></a>
    </body>
</html>