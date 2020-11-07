<html>

<head>
        <title>Articles triés</title>
        <link rel="stylesheet" href="../visuel/stylesheet.css" />
        <?php include_once '../index.php'; ?>
    </head>

    <body>

    <?php
    
    if(isset($_POST['theme']) && $_POST['theme']!="tous")
    { 
        if(isset($_POST['redac'])&& $_POST['redac']!="tous")
        
            getArticlesByRedacteurAndTheme($_POST['theme'], $_POST['redac']);
        
        else 
            getArticlesByTheme($_POST['theme']);
    
    }
    else 
        getArticlesByRedacteur($_POST['redac']);

        ?>

    </body>

</html>