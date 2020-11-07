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
            
			include '../model/connexionBDD.php';
			include_once '../model/query.php';
			$co="\t";
			$co.='<div class="authstatus '.(($auth)?'connected':'disconnected').'">'."\n\t\t\t\t";
			$co.='<id="status">';
			if ($auth) {
				echo "id = " . $_SESSION['id'];
				$co .= getRedactorById((int)$_SESSION['id']);
				echo "<a href=...view/ecritureArticle.php>Ecrire un article< </a></br></br>";
				echo "<a href=...control/disconnect.php>Déconnexion< </a></br></br>";
			} else {
				$co .= 'Déconnecté</br>';
			}
			$co.= '</span>'."\n\t\t\t".'</div>'."\n\t\t</br>";
			echo $co;
			
			//$arr=getThem(); //fct dans le query.php qui stocke les articles dans un tableau d'articles 
			

			$path_to_home="../view/home.php";
			echo "<a href=$path_to_home> >retour accueil< </a></br>";


			function home() {
				return header('Location: ../view/home.php');
			}
			
			

?>

<link rel="stylesheet" href="../visuel/stylesheet.css" />