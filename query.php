<?php

function listArticle()
{
    require 'connexionBDD.php';
    include_once 'index.php';

    $arr[]=array();
    $result = $objPdo->query('SELECT * FROM news');
    while ($row=$result->fetch(PDO::FETCH_OBJ))
    {
        $arr[]= new Article($row->idnews, $row->idtheme ,$row->titrenews , $row->datenews, $row->textenews, $row->idredacteur);
        echo "<tr>";
        echo "<td>" . $row->idnews . "</td>";
        echo "<td>" . $row->idtheme . "</td>";
        echo '<td id=titre><form method ="get" action ="lectureArticle.php"><input type="text" id="titrenews" name="titrenews" placeholder="'.$row->titrenews.'" readonly><input type="submit" value="Voir plus"></form></td>';
        echo "<td>" . $row->datenews . "</td>";
        echo "<td>" . $row->textenews . "</td>";
        echo "</tr>";
    }
}

include_once 'article.php';
function lectureArticle(int $id) {

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
}


function getRedactorById(int $id) {
    require 'connexionBDD.php';

    $result = $objPdo->prepare('SELECT * FROM redacteur WHERE idredacteur=:id');
    $result->bindParam(':id', $id);
    $result->execute();
    if ($row == null) {
        unset($objPdo);
        return null;
    } else {
        unset($objPdo);
        return '<p> id="loggedUserName"'.$row['nom'].'<br /> id="loggedUserMail"'.$row['mail'].'</p>';
    }
}

?>