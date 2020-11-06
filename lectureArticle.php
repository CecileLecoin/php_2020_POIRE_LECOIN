<head>
        <title>Liste des articles</title>
        <link rel="stylesheet" href="stylesheet.css" />
    </head>

    <body>
        <table>
            <?php
            require_once 'index.php';
            require_once 'query.php';
            include_once 'article.php';
           
            lireArticle($_GET['titrenews']);

            ?>
        </table>
        <br />
        <br />
        <a href="authentification.php">Connexion au compte redacteur</a></br>
        <a href="home.php">Retour accueil</a>

        <?php
        $co 
        ?>
    </body> 
    </html>