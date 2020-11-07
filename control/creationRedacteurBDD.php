<?php
require("../model/connexionBDD.php");

function creationRedacteur()
{
    include "../connexion/query.php";
    include_once '../index.php';
    if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['mail']) && isset($_POST['mdp']))
    {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $mail = $_POST['mail'];
        $mdp = $_POST['mdp'];

        if (mailRedacteurIsAlreadyUse($mail))
        {
            echo "Cette adresse mail est déja utilisé";
        }
        else
        {
            if (creationRedacteurBDD($nom, $prenom, $mail, $mdp) != null) {
                echo "Le compte à bien été créer";
            }
            else {
                echo "Une errreur est survenue dans la base de données";
            }

        }

    }
}
?>