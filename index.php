<?php
session_start();
			if (isset($_SESSION['authBDD'])) {
				if ($_SESSION['authBDD'] == 'true') { //La session est celle d'un redacteur (redacteur est connecté)
					$auth = true;
				} else {
					$auth = false;
				}
			} else {
				$_SESSION['authBDD'] = 'false'; // La session est celle d'un lecteur
				$auth = false;
            }
            
			include 'connexionBDD.php';
			include_once 'query.php';
			$co="\t";
			$co.='<div class="authstatus '.(($auth)?'connected':'disconnected').'">'."\n\t\t\t\t";
			$co.='<id="status">';
			if ($auth) {
				echo "id = " + $_SESSION['identifiant'] + " et mdp = " + $_SESSION['mdp'];
				$co .= getRedactorById($_SESSION['id']);
			} else {
				$co .= 'Déconnecté';
			}
			$co.= '</span>'."\n\t\t\t".'</div>'."\n\t\t";
			echo $co;
			
			$arr=getThem();
			
			$path_to_home="./home.php";
			echo "<a href=$path_to_home>retour accueil</a>";


			function home() {
				return header('Location: ./home.php');
			}
			
			

?>