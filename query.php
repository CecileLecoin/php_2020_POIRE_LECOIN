<?php

function listArticle()
{
    require 'connexionBDD.php';

    $result = $objPdo->query('SELECT * FROM news');
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


function getRedactorByMail(string $mel, string $mdp) {
    require 'connexionBDD.php';

    $result = $objPdo->prepare('SELECT * FROM redacteur WHERE adressemail=:mel and motdepasse=:mdp');
    $result->bindParam(':mel', $mel);
    $result->bindParam(':mdp', $mdp);
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