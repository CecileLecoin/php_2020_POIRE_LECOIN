<html>
    <head>
        <title>Liste des articles</title>
    </head>
    <body>
        <table>
            <?php
                include 'query.php';
                include_once 'article.php';
                listArticle();
                echo"\n\n\n\n\n";
                $article = new Article(1, "", "", "", "", "");
                lectureArticle($article->getIdnews())

            ?>
        </table>
        <br />
        <br />
        <a href="index.php">revenir vers la page d'accueil</a><br /><br /><br /><br /><br /><br />
    </body>
</html>