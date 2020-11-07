<html>

<head>
        <title>Articles triés</title>
        <link rel="stylesheet" href="../visuel/stylesheet.css" />
        <?php include_once '../index.php'; ?>
    </head>

    <body>

    <?php
    include_once '../index.php';
    if(isset($_POST['theme']) && $_POST['theme']!="tous")
    { 
        if(isset($_POST['redac'])&& $_POST['redac']!="tous")
        
            getArticlesByRedacteurAndTheme($_POST['theme'], $_POST['redac']);
        
        else 
            getArticlesByTheme($_POST['theme']);
    
    }
    else 
        getArticlesByRedacteur($_POST['redac']);

        if(isset($_POST['theme']) && $_POST['theme']!="tous") $theme="oui";
        else $theme = "non";
        if(isset($_POST['redac'])&& $_POST['redac']!="tous") $redac="oui";
        else $redac="non";
        if(isset($_POST['date'])&& $_POST['date']!="toutes") $date="oui";
        else $date="non";

        if($theme="oui" && $redac="oui" && $date="oui") listArticle();
        elseif($theme="oui" && $redac="oui" && $date="non") getArticlesByRedacteurAndTheme($_POST['theme'], $_POST['redac']);
        elseif($theme="oui" && $redac="non" && $date="non") getArticlesByTheme($_POST['theme']);
        elseif($theme="non" && $redac="oui" && $date="oui") ;
        elseif($theme="non" && $redac="oui" && $date="non") getArticlesByRedacteur($_POST['redac']);
        elseif($theme="non" && $redac="non" && $date="oui") getArticleByDate($_POST['date']);


        ?>
    </body>

</html>