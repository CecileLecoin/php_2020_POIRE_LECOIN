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
        <link rel="stylesheet" href="stylesheet.css" />
    </head>

    <body>
        <table>
            <?php
            require_once 'index.php';
            include_once 'query.php';
            include_once 'article.php';
            listArticle();
            echo "\n";

            ?>
        </table>
        <br />
        <br />
        <a href="authentification.php">Connexion au compte redacteur</a></br>

        <?php
        $co 
        ?>
    </body> 
</html>