<head>
        <title>Liste des articles</title>
    </head>

    <body>
        <table>
            <?php
            require_once 'index.php';
            require_once 'query.php';
            include_once 'article.php';
            /*$article = new Article(0, "", $_GET['titrenews'], "", "", "");
            foreach ($arr as Article($v1, $v2, $v3, $v4, $v5, $v6)) {
                if($article->getTitrenews()==$v3)
                    $article->setIdnews($compArticle->getIdnews());
            }*/
            echo (isset($_GET['titrenews']));
            echo ($_GET['titrenews']);
            lireArticle($_GET['titrenews']);
            //lectureArticle($article->getIdnews());

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