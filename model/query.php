<?php

function listArticle() //donne tous les articles et les ecrit + bonus = clicker sur le texte mene à une page avec l'article en entier
{
    require 'connexionBDD.php';
    include_once '../index.php';
    include_once '../metier/article.php';

    $arr[]=array();
    $result = $objPdo->query('SELECT * FROM news');
    while ($row=$result->fetch(PDO::FETCH_OBJ))
    {
        $arr[]= new Article($row->idnews, $row->idtheme ,$row->titrenews , $row->datenews, $row->textenews, $row->idredacteur);
        echo "<tr>";
        /*echo "<td>" . $row->idnews . "</td></br>";
        echo "<td>" . $row->idtheme . "</td></br>";*/ //inutile à l'affichage
        echo "</tr><tr><td>" . $row->datenews . "</td>";
        echo "</tr><tr><td>" . $row->titrenews . "</td>";
        echo '<td id=titre><form method ="get" action ="lectureArticle.php" ><input type="text" id="titrenews" name="titrenews" class="titre-pass" style="background-color : rgb(77, 104, 145); color : white; font-family: verdana" placeholder="'.$row->titrenews.'" value ="'.$row->titrenews.'" readonly><input type="submit" value="Voir plus"></form></td></br></br>';

        echo "<td>" . $row->textenews . "</td>";
        echo "</tr>";
    }
}


function getArticlesByRedacteurAndTheme(string $themeD, string $redacN) //donne tous les articles et les ecrit + bonus = clicker sur le texte mene à une page avec l'article en entier
{
    require 'connexionBDD.php';
    include_once '../index.php';
    include_once '../metier/article.php';

    $arr[]=array();
    $result = $objPdo->prepare('SELECT * FROM news WHERE idtheme=:idT AND idredacteur=:idR');
    $idT=getIdTheme($themeD);
    $idR=getIdRedacteur($redacN);
    $result->bindParam(':idT', $idT);
    $result->bindParam(':idR', $idR);
    $result->execute();
    while ($row=$result->fetch(PDO::FETCH_OBJ))
    {
        $arr[]= new Article($row->idnews, $row->idtheme ,$row->titrenews , $row->datenews, $row->textenews, $row->idredacteur);
        echo "<tr>";
        /*echo "<td>" . $row->idnews . "</td></br>";
        echo "<td>" . $row->idtheme . "</td></br>";*/ //inutile à l'affichage
        echo "</tr><tr><td>" . $row->datenews . "</td>";
        echo "</tr><tr><td>" . $row->titrenews . "</td>";
        echo '<td id=titre><form method ="get" action ="lectureArticle.php" ><input type="text" id="titrenews" name="titrenews" class="titre-pass" style="background-color : rgb(77, 104, 145); color : white; font-family: verdana" placeholder="'.$row->titrenews.'" value ="'.$row->titrenews.'" readonly><input type="submit" value="Voir plus"></form></td></br></br>';

        echo "<td>" . $row->textenews . "</td>";
        echo "</tr>";
    }
}

function getArticlesByTheme(string $themeD)
{
    require 'connexionBDD.php';
    include_once '../index.php';
    include_once '../metier/article.php';

    $arr[]=array();
    $result = $objPdo->prepare('SELECT * FROM news WHERE idtheme=:idT');
    $idT=getIdTheme($themeD);
    $result->bindParam(':idT', $idT);
    $result->execute();
    while ($row=$result->fetch(PDO::FETCH_OBJ))
    {
        $arr[]= new Article($row->idnews, $row->idtheme ,$row->titrenews , $row->datenews, $row->textenews, $row->idredacteur);
        echo "<tr>";
        /*echo "<td>" . $row->idnews . "</td></br>";
        echo "<td>" . $row->idtheme . "</td></br>";*/ //inutile à l'affichage
        echo "</tr><tr><td>" . $row->datenews . "</td>";
        echo "</tr><tr><td>" . $row->titrenews . "</td>";
        echo '<td id=titre><form method ="get" action ="lectureArticle.php" ><input type="text" id="titrenews" name="titrenews" class="titre-pass" style="background-color : rgb(77, 104, 145); color : white; font-family: verdana" placeholder="'.$row->titrenews.'" value ="'.$row->titrenews.'" readonly><input type="submit" value="Voir plus"></form></td></br></br>';

        echo "<td>" . $row->textenews . "</td>";
        echo "</tr>";
    }
}


function getArticlesByRedacteur(string $redacN) //donne tous les articles et les ecrit + bonus = clicker sur le texte mene à une page avec l'article en entier
{
    require 'connexionBDD.php';
    include_once '../index.php';
    include_once '../metier/article.php';

    $arr[]=array();
    $result = $objPdo->prepare('SELECT * FROM news WHERE idredacteur=:idR');
    $idR=getIdRedacteur($redacN);
    $result->bindParam(':idR', $idR);
    $result->execute();
    while ($row=$result->fetch(PDO::FETCH_OBJ))
    {
        $arr[]= new Article($row->idnews, $row->idtheme ,$row->titrenews , $row->datenews, $row->textenews, $row->idredacteur);
        echo "<tr>";
        /*echo "<td>" . $row->idnews . "</td></br>";
        echo "<td>" . $row->idtheme . "</td></br>";*/ //inutile à l'affichage
        echo "</tr><tr><td>" . $row->datenews . "</td>";
        echo "</tr><tr><td>" . $row->titrenews . "</td>";
        echo '<td id=titre><form method ="get" action ="lectureArticle.php" ><input type="text" id="titrenews" name="titrenews" class="titre-pass" style="background-color : rgb(77, 104, 145); color : white; font-family: verdana" placeholder="'.$row->titrenews.'" value ="'.$row->titrenews.'" readonly><input type="submit" value="Voir plus"></form></td></br></br>';

        echo "<td>" . $row->textenews . "</td>";
        echo "</tr>";
    }
}

function getArticleByDate(string $dateS)
{
    require 'connexionBDD.php';
    include_once '../index.php';
    include_once '../metier/article.php';

    $arr[]=array();
    $result = $objPdo->prepare('SELECT * FROM news WHERE datenews=:dt');
    $result->bindParam(':dt', $dateS);
    $result->execute();
    while ($row=$result->fetch(PDO::FETCH_OBJ))
    {
        $arr[]= new Article($row->idnews, $row->idtheme ,$row->titrenews , $row->datenews, $row->textenews, $row->idredacteur);
        echo "<tr>";
        /*echo "<td>" . $row->idnews . "</td></br>";
        echo "<td>" . $row->idtheme . "</td></br>";*/ //inutile à l'affichage
        echo "</tr><tr><td>" . $row->datenews . "</td>";
        echo "</tr><tr><td>" . $row->titrenews . "</td>";
        echo '<td id=titre><form method ="get" action ="lectureArticle.php" ><input type="text" id="titrenews" name="titrenews" class="titre-pass" style="background-color : rgb(77, 104, 145); color : white; font-family: verdana" placeholder="'.$row->titrenews.'" value ="'.$row->titrenews.'" readonly><input type="submit" value="Voir plus"></form></td></br></br>';

        echo "<td>" . $row->textenews . "</td>";
        echo "</tr>";
    }
}


function getThem()
{
    require 'connexionBDD.php';
    include_once '../index.php';

    $result = $objPdo->query('SELECT * FROM news');
    while ($row=$result->fetch(PDO::FETCH_OBJ))
    {
        $arr[]= new Article($row->idnews, $row->idtheme ,$row->titrenews , $row->datenews, $row->textenews, $row->idredacteur);
    }
    return $arr;
}

function getDescriptionTheme()
{
    require 'connexionBDD.php';
    include_once '../index.php';

    $result = $objPdo->query('SELECT * FROM theme');
    while ($row=$result->fetch(PDO::FETCH_OBJ))
    {
        $arrTheme[]= $row->descript;
    }
    return $arrTheme;
}

function getDates()
{
    require 'connexionBDD.php';
    include_once '../index.php';

    $result = $objPdo->query('SELECT * FROM news');
    while ($row=$result->fetch(PDO::FETCH_OBJ))
    {
        $arrDate[]= $row->datenews;
    }
    return $arrDate;
}

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
            echo "</tr><tr><td>" . $row->nom;
            echo " " . $row->prenom . "</td>";
            echo "</tr>";
        }
    }
}

function setNews(string $themeD, string $titre, string $texte, string $redacN){
    require 'connexionBDD.php';
    $idT=getIdTheme($themeD);
    $idR=getIdRedacteur($redacN);
    $result = $objPdo->prepare('INSERT INTO news (idtheme, titrenews, datenews, textenews, idredacteur) VALUE (:theme, :titre, now(), :texte, :redacteur)');
    $result->bindParam(':theme', $idT);
    $result->bindParam(':titre', $titre);
    $result->bindParam(':texte', $texte);
    $result->bindParam(':redacteur', $idR);
    //$result->execute();
    if($result->execute()) echo "";
    else { echo "\nPDO::errorInfo():\n";

        print_r($result->errorInfo());}
}

function getIdTheme(string $description){
        require 'connexionBDD.php';
        $result2 = $objPdo->prepare('SELECT * FROM theme WHERE descript=:theme');
        $result2->bindParam(':theme', $description);
        $result2->execute();
        while ($row=$result2->fetch(PDO::FETCH_OBJ))
        {
            return $row->idtheme;
            die();
        }
}

function getIdRedacteur(string $nom){
    require 'connexionBDD.php';
    $result2 = $objPdo->prepare('SELECT * FROM redacteur');
    $result2->execute();
    while ($row=$result2->fetch(PDO::FETCH_OBJ))
    {
        $compare = $row->nom . " " . $row->prenom;
        echo $compare;
        echo "</br>" . $nom;
        echo $row->idredacteur;
        if(strcmp($compare, $nom)==0) { return $row->idredacteur; die;}

    }
}

function getRedacteurInfos() {
        require 'connexionBDD.php';
        $result2 = $objPdo->prepare('SELECT nom, prenom FROM redacteur');
        $result2->execute();
        while ($row=$result2->fetch(PDO::FETCH_OBJ))
        {
            $arrRedac[]= $row->nom . " " . $row->prenom;
        }
        return $arrRedac;

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
            return '<p> id="loggedUserName"'.$row->nom.'<br /> id="loggedUserMail"'.$row->adressemail.'</p>';
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

function creationRedacteurBDD($nom, $prenom, $mail, $mdp)
{
    require 'connexionBDD.php';

    $result = $objPdo->prepare('INSERT INTO redacteur (nom, prenom, adressemail, motdepasse) VALUE (:nom, :prenom, :mail, :mdp)');
    $result->bindParam(':nom', $nom);
    $result->bindParam(':prenom', $prenom);
    $result->bindParam(':mail', $mail);
    $result->bindParam(':mdp', $mdp);
    if($result->execute()) {
        return $result->fetch(PDO::FETCH_ASSOC)::lastInsertId();
    }
    else {
        return $result = null;
    }

}

?>