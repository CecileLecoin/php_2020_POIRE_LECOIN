<html>

<head>
        <title>Nouvel article</title>
        <link rel="stylesheet" href="stylesheet.css" />
        
    </head>

    <body>
    

        <?php
        
            function listeTheme() {
                include_once 'query.php';  
                include_once 'index.php'; 
                $arrTheme=getDescriptionTheme();
                foreach($arrTheme as $value)
                {
                    echo "<option unselected> $value </option>";
                }
            }

            function listeRedacteur() {
                include_once 'query.php';
                $arrRedac=getRedacteurInfos();
                foreach($arrRedac as $value)
                {
                    echo "<option unselected> $value </option>";
                }
            }

        ?>

        
            <form name="add" method="post" action="envoieNews.php">
			    <!--<label for="idnews">Idnews :</label>
				<input type="text" id="idnews" name="idnews" size="3" maxlength="5" placeholder="à changer" value="">-->
                
                <label for="theme">Theme de la news :</label>
                <select name="theme" style="background-color : #66b5ff"> <?php listeTheme() ?> </select>
                <br />
                <label for="redacteur">Redacteur :</label>
                <select name="redacteur" style="background-color : #66b5ff"> <?php listeRedacteur() ?> </select>
                
                <br /><br /><br />

                <label for="titre">Titre :</label>
				<input type="text" id="titre" name="titre" value="">
                <br />
                <label for="textenews">News :</label>
				<textarea name="textenews" width="200" heigth="300" maxlength="299" value="" required></textarea>
				<br /><br />
                <input type="submit" name="valider" value="Valider">
                
                
        </form>