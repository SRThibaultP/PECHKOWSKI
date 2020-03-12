<!DOCTYPE html>
<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="CSS/style.css" media="screen" type="text/css" />
        <a href="index.php"><img src="retour.png"></a>
    </head>
    <body>
        <div id="container">
            <!-- zone de connexion -->

            <form action="confirmchoise.php" method="POST">
              <h1 align='center'>Accès à la base de données</h1>

              <label><b>Choix de la table disponible</b></label>

                  </br>

              <select name="choix">
                <option value="choix1">1. Jeux vidéo</option>
                <option value="choix2">2. Ville</option>
                <option value="choix3">3. Test</option>
              </select>

              <input type="submit" id='submit' value='Valider' >

                <?php

                ?>
            </form>
        </div>
    </body>
</html>
