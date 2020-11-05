<html>

<head>
        <title>Nouvel article</title>
        <link rel="stylesheet" href="stylesheet.css" />
    </head>

    <body>
    

        <?php
        include_once 'query.php';
        include_once 'index.php';
            function listeTheme() {
                include_once 'query.php';
                include_once 'index.php';
                $i=0;
                echo "there";
                getDescriptionTheme();
                foreach($arrTheme as $value)
                {
                    echo "<option unselected> $value </option>";
                }
            }

        ?>
            <form name="add" method="post" action="envoiNews.php">
			    <!--<label for="idnews">Idnews :</label>
				<input type="text" id="idnews" name="idnews" size="3" maxlength="5" placeholder="à changer" value="">-->
                
                <label for="theme">Id theme :</label>
                <select name="theme" required> <?php listeTheme() ?> </select>
                
                <br /><br />
                
                <label for="textenews">News :</label>
				<input type="text" id="textenews" name="textenews" width="100" heigth="200" maxlength="299" value="" required>
				<br /><br />
                <input type="submit" name="valider" value="Valider">
                
                
        </form>