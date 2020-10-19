<?php

$messgErreur=""; // initialise message d'erreur

		try
	{
		$objPdo = new PDO
				('mysql:host=devbdd.iutmetz.univ-lorraine.fr;port=3306;dbname=lecoin2u_news',
				'lecoin2u_appli', '31603422');
        $objPdo -> exec("SET CHARACTER SET utf8");

		echo "connexion ok<br/>\n";

	} catch( Exception $exception )
	{
	    die($exception->getMessage());
	}



?>
<html>
<head><title>Authentification</title>
<br/>
<?php echo $messgErreur;?>
<body>
</body>
</html>