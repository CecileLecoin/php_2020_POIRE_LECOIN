<?php

function listArticle() //donne tous les articles et les ecrit + bonus = clicker sur le texte mene à une page avec l'article en entier
{
    require 'connexionBDD.php';
    include_once 'index.php';

    $arr[]=array();
    $result = $objPdo->query('SELECT * FROM news');
    while ($row=$result->fetch(PDO::FETCH_OBJ))
    {
        $arr[]= new Article($row->idnews, $row->idtheme ,$row->titrenews , $row->datenews, $row->textenews, $row->idredacteur);
        echo "<tr>";
        /*echo "<td>" . $row->idnews . "</td></br>";
        echo "<td>" . $row->idtheme . "</td></br>";*/
        echo '<td id=titre><form method ="get" action ="lectureArticle.php"><input type="text" id="titrenews" name="titrenews" placeholder="'.$row->titrenews.'" value ="'.$row->titrenews.'" readonly><input type="submit" value="Voir plus"></form></td></br></br></br>';
        echo "</tr><tr><td>" . $row->datenews . "</td>";
        echo "<td>" . $row->textenews . "</td>";
        echo "</tr>";
    }
}

function getThem()
{
    require 'connexionBDD.php';
    include_once 'index.php';

    $arr[]=array();
    $result = $objPdo->query('SELECT * FROM news');
    while ($row=$result->fetch(PDO::FETCH_OBJ))
    {
        $arr[]= new Article($row->idnews, $row->idtheme ,$row->titrenews , $row->datenews, $row->textenews, $row->idredacteur);
    }
    return $arr;
}

include_once 'article.php';
/*function lectureArticle(int $id) { //recupere un article par son id

    require 'connexionBDD.php';

    $result = $objPdo->prepare('SELECT * FROM news WHERE idnews=:id');
    $result->bindParam(':id', $id);
    $result->execute();
    while ($row=$result->fetch(PDO::FETCH_OBJ))
    {
        echo "<tr>";
        echo "<td>" . $row->idnews . "</td>";
        echo "<td>" . $row->idtheme . "</td>";
        echo "<td>" . $row->titrenews . "</td>";
        echo "<td>" . $row->datenews . "</td>";
        echo "<td>" . $row->textenews . "</td>";
        echo "</tr>";
    }
}*/

function lireArticle(string $titre) // recupere un article par son titre
{
    require 'connexionBDD.php';

    $result = $objPdo->prepare('SELECT * FROM news WHERE titrenews=:titre');
    $result->bindParam(':titre', $titre);
    $result->execute();
    while ($row=$result->fetch(PDO::FETCH_OBJ))
    {
        echo "<tr>";
        /*echo "<td>" . $row->idnews . "</td>";
        echo "<td>" . $row->idtheme . "</td>";*/
        echo "</tr><tr><td>" . $row->titrenews . "</td></br></br></br>";
        echo "</tr><tr><td>" . $row->datenews . "</td>";
        echo "</tr><tr><td>" . $row->textenews . "</td>";
        $redac= $row->idredacteur;
        $result2 = $objPdo->prepare('SELECT nom, prenom FROM redacteur WHERE idredacteur=:id');
        $result2->bindParam(':id', $redac);
        $result2->execute();  
        while ($row=$result2->fetch(PDO::FETCH_OBJ))
        {
            echo "</tr><tr><td>" . $row->nom . "</td>";
            echo "<td>" . $row->prenom . "</td>";      
            echo "</tr>";
        }
    }
}


function getRedactorById(int $id) {
    require 'connexionBDD.php';

    $result = $objPdo->prepare('SELECT * FROM redacteur WHERE idredacteur=:id');
    $result->bindParam(':id', $id);
    $result->execute();
    while ($row = $result->fetch(PDO::FETCH_OBJ))
    {
        if ($row == null) {
            unset($objPdo);
            return null;
        } else {
            unset($objPdo);
            return '<p> id="loggedUserName"'.$row['nom'].'<br /> id="loggedUserMail"'.$row['mail'].'</p>';
        }
    }
}

function mailRedacteurIsAlreadyUse(string $mail) 
{
    require 'connexionBDD.php';

    $result = $objPdo->prepare('SELECT idredacteur FROM redacteur WHERE adressemail=:mail');
    $result->bindParam(':mail', $mail);
    $result->execute();
    
    if ($result->rowCount() > 0) 
    {
        return true;
    }
    else 
    {
        return false;
    }
}

?>