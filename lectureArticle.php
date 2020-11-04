<head>
        <title>Liste des articles</title>
    </head>

    <body>
        <table>
            <?php
            require_once 'index.php';
            include_once 'query.php';
            include_once 'article.php';
            $article = new Article(0, "", $_GET['titrenews'], "", "", "");
            foreach ($arr as $compArticle) {
                if($article->getTitrenews()==$compArticle->getTitrenews())
                    $article->setIdnews($compArticle->getIdnews());
            }
            lectureArticle($article->getIdnews())

            ?>
        </table>
        <br />
        <br />
        <a href="authentification.php">Connexion au compte redacteur</a>

        <?php
        $co 
        ?>
    </body> 
    </html>