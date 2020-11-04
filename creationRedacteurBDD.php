<?php
require("connexionBDD.php");

function creationRedacteur() 
{
    include_once "query.php";

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
            creationRedacteur();

        }

    }
}
?>