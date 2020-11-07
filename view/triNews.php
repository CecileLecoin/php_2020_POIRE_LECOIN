<html>

<head>
        <title>Articles triés</title>
        <link rel="stylesheet" href="stylesheet.css" />
        <?php include_once '../index.php'; ?>
    </head>

    <body>

    <?php
    
    if(isset($_POST['theme']))
    {
        if(isset($_POST['redac']))
        {
            getArticlesByRedacteurAndTheme($_POST['theme'], $_POST['redac']);
        }
        else {
            getArticlesByTheme($_POST['theme']);
        }