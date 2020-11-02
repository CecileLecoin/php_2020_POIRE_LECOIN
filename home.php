<html>
    <head>
        <title>Liste des articles</title>
    </head>
    <body>
        <table>
            <?php
                include 'query.php';
                listArticle();
                echo"\n\n\n\n\n"

            ?>
        </table>
        <br />
        <br />
        <a href="index.php">revenir vers la page d'accueil</a><br /><br /><br /><br /><br /><br />
    </body>
</html>