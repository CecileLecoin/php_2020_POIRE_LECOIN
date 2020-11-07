<html>

<head>
        <title>Nouvel article</title>
        <link rel="stylesheet" href="../visuel/stylesheet.css" />
        <?php include_once '../index.php'; ?>
    </head>

    <body>

    <?php
    
    if(isset($_POST['theme']))
    {
        if(isset($_POST['redacteur']))
        {
            if(isset($_POST['titre']))
            {
                if(isset($_POST['textenews']))
                {
                    setNews($_POST['theme'], $_POST['titre'], $_POST['textenews'], $_POST['redacteur']);
                    echo "Article rédigé ! Vous pouvez vous retourner à l'accueil :)";
                }
                else
                echo "texte incorrect";
            }
            else
                echo "titre incorrect";
        }
        else
                echo "redacteur incorrect";
    }
    else
                echo "theme incorrect";

    ?>

<br />
        <br />
        

        <?php
        $co 
        ?>
    </body> 
    </html>