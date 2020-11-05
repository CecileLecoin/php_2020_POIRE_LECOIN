<html>

<head>
        <title>Nouvel article</title>
        <link rel="stylesheet" href="stylesheet.css" />
    </head>

    <body>
    

        <?php
        include_once 'query.php';
            function listeTheme() {
                include_once 'query.php';
                include_once 'index.php';
                $i=0;
                $arrTheme[]=getDescriptionTheme();
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
                <select id="theme" name="theme" required><?php listeTheme() ?></select>
                
                <br /><br />
                
                <label for="textenews">News :</label>
				<input type="text" id="textenews" name="textenews" size="50" maxlength="299" value="" required>
				<br /><br />
                <input type="submit" name="valider" value="Valider">
                
                
        </form>