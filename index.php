<?php
session_start();
			if (isset($_SESSION['authBDD'])) {
				if ($_SESSION['authBDD'] == 'true') {
					$auth = true;
				} else {
					$auth = false;
				}
			} else {
				$_SESSION['authBDD'] = 'false';
				$auth = false;
            }
            
			include 'connexionBDD.php';
			include_once 'query.php';
			$co="\t";
			$co.='<div class="authstatus '.(($auth)?'connected':'disconnected').'">'."\n\t\t\t\t";
			$co.='<span id="status">';
			if ($auth) {
				$co .= getRedactorByMail($_SESSION['identifiant'], $_SESSION['mdp']);
			} else {
				$co .= 'Déconnecté';
			}
			$co.= '</span>'."\n\t\t\t".'</div>'."\n\t\t";
            echo $co;
            
            echo "<a href=<?php $path_to_home = './home.php';?> \"retour accueil\"></a>";

?>