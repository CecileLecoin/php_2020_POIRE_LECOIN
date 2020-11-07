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
            return "Cette adresse mail est déja utilisé";
        }
        else
        {
            $id = creationRedacteurBDD($nom, $prenom, $mail, $mdp);
            if ($id != null) {
                return $id;
            }
            else {
                return "Une errreur est survenue dans la base de données";
            }

        }

    }
}
?>