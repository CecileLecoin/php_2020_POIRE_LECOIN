<html>

<!-- ///
/////
/////
TODO : 
-message une fois l'article redigé
- lien pour créer un rédacteur
///-->


    <head>
        <title>Liste des articles</title>
        <link rel="stylesheet" href="../visuel/stylesheet.css" />
    </head>

    <body>

    <?php
        
        function listeTheme() {
            include_once '../model/query.php';  
            include_once '../index.php'; 
            $arrTheme=getDescriptionTheme();
            foreach($arrTheme as $value)
            {
                echo "<option unselected> $value </option>";
            }
            echo "<option unselected> tous </option>";
        }

        function listeRedacteur() {
            include_once '../model/query.php';
            $arrRedac=getRedacteurInfos();
            foreach($arrRedac as $value)
            {
                echo "<option unselected> $value </option>";
            }
            echo "<option unselected> tous </option>";
        }

        

    ?>

        <table class="tableauA">
        <?php
            require_once '../index.php';
            include_once '../model/query.php';
            listArticle();
            ?>
        </table>
        <br />
        <form name="tri" method="post" action="triNews.php">
        <select name="theme" style="background-color : #66b5ff"> <?php listeTheme() ?> </select>
        <select name="redac" style="background-color : #66b5ff"> <?php listeRedacteur() ?> </select>
        
        <input type="submit" class="submit" name="valider" value="Valider">
        <br />
        <a href="authentification.php"> >Connexion au compte redacteur< </a></br>
        <a href="creationRedacteur.php"> >Création d'un compte rédacteur< </a></br>

        <?php
        $co 
        ?>
    </body> 
</html>