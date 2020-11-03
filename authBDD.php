<?php
	require('connexionBDD.php');
	$result	=	$objPdo->prepare('select idredacteur from redacteur where adressemail = ? and motdepasse = ?');
    
    session_start();
	if (isset($_POST['identifiant']) && isset($_POST['mdp'])) {
		if (isset($_SESSION['authBDD']) || $_SESSION['authBDD'] != 'true') {
			$result->execute(array($_POST['identifiant'],$_POST['mdp']));
			$result = $result->fetch();
            if ($result != null) {
				$_SESSION['authBDD'] = 'true';
				$_SESSION['identifiant'] = $result[0];
                die();

                echo "<a href=<?php $path_to_home = './home.php';?> \"retour accueil\"></a>";
                
			}		
		}
    }
    
	$_SESSION['authBDD'] = 'false';
	
	echo "Mauvais identifiant ou mot de passe";
    
?>