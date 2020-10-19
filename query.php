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


?>