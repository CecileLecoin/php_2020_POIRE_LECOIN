<html>

<!-- ///
/////
/////
TODO : 
-FAIT------ lien pour ce deconnecter 
- lien pour créer un rédacteur
-FAIT------ Si le redacteur est co, lien pour créer un article
///-->


    <head>
        <title>Liste des articles</title>
        <link rel="stylesheet" href="./visuel/stylesheet.css" />
    </head>

    <body>
        <table class="tableauA">
        <?php
            require_once './index.php';
            include_once './model/query.php';
            listArticle();
            ?>
        </table>
        <br />
        <br />
        <a href="authentification.php">Connexion au compte redacteur</a></br>
        <a href="creationRedacteur.php">Création d'un compte rédacteur</a></br>

        <?php
        $co 
        ?>
    </body> 
</html>