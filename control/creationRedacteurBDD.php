<?php
require("../model/connexionBDD.php");

function creationRedacteur()
{
    include_once '../index.php';
    if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['mail']) && isset($_POST['mdp']))
    {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $mail = $_POST['mail'];
        $mdp = $_POST['mdp'];

        if (mailRedacteurIsAlreadyUse($mail))
        {
            echo "<script>alert('Cette adresse mail est déja utilisé')</script>";
        }
        else
        {
            $id = creationRedacteurBDD($nom, $prenom, $mail, $mdp);
            if ($id == true) {
                echo "<p>Le compte à bien été créer veuillez vous reconnectez par la suite</p>";
            }
            else {
                echo "<script>alert('Une errreur est survenue dans la base de données')</script>";
            }

        }

    }
}
?>
