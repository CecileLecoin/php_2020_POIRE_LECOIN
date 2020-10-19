<html>
    <head>
        <title>Liste des articles</title>
    </head>
    <body>
        <table>
            <?php
                include 'query.php';
                listArticle();
            ?>
        </table>
        <br />
        <br />
        <a href="index.php">revenir vers la page d'accueil</a><br /><br /><br /><br /><br /><br />
    </body>
</html>