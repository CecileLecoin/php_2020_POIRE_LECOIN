<html>

<head>
        <title>Nouvel article</title>
        <link rel="stylesheet" href="stylesheet.css" />
    </head>

    <body>

        <?php
            function listeTheme() {
                $i=0;
                $arr=getTheme();
                //foreach($arr->descrition as $value)
                for($i=0; $i<10; $i++)
                {
                    echo "<option unselected> $i </option>";
                    //echo "<option unselected> $value </option>";
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