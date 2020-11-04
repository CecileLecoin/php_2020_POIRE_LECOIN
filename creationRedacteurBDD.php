<?php
require("connexionBDD.php");

function creationRedacteur() 
{
    include_once "query.php";

    if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['identifiant']) && isset($_POST['mdp'])) 
    {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $identifiant = $_POST['identifiant'];
        $mdp = $_POST['mdp'];

        mailRedacteurIsAlreadyUse($mail);

    }
}
?>