<?php
	require('connexionBDD.php');
	include_once 'index.php';
	$result	=	$objPdo->prepare('select idredacteur from redacteur where adressemail = ? and motdepasse = ?');
    
    session_start();
	if (isset($_POST['identifiant']) && isset($_POST['mdp'])) {
		if (isset($_SESSION['authBDD']) || $_SESSION['authBDD'] != 'true') {
			$result->execute(array($_POST['identifiant'],$_POST['mdp']));
			$result = $result->fetch();
            if ($result != null) {
				$_SESSION['authBDD'] = 'true';
				$_SESSION['id'] = $result[0];
				
				home();
				die();

                
                
			}		
		}
    }
    
    $_SESSION['authBDD'] = 'false';
	echo "Mauvais identifiant ou mot de passe";
    
    ?>
