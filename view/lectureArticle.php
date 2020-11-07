<head>
        <title>Liste des articles</title>
        <link rel="stylesheet" href="../visuel/stylesheet.css" />
    </head>

    <body>
        <table>
            <?php
            require_once '../index.php';
            require_once '../model/query.php';
            include_once '../metier/article.php';
           
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