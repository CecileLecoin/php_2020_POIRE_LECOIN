<html>

<!-- ///
/////
/////
TODO : 
- lien pour ce deconnecter 
- lien pour créer un rédacteur
- Si le redacteur est co, lien pour créer un article
///-->


    <head>
        <title>Liste des articles</title>
    </head>

    <body>
        <table>
            <?php
            include 'query.php';
            include_once 'article.php';
            listArticle();
            echo "\n\n\n\n\n";
            $article = new Article(1, "", "", "", "", "");
            lectureArticle($article->getIdnews())

            ?>
        </table>
        <br />
        <br />
        <a href="index.php">revenir vers la page d'accueil</a><br /><br /><br />
        <a href="authentification.php">Connexion au compte redacteur</a>
    </body> 
</html>