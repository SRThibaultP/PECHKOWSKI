<?php
if(isset($_POST['username']) && isset($_POST['password']))
{
    // connexion à la base de données
    $db_host     = 'localhost';
    $db_username = $_POST['username'];
    $db_password = $_POST['password'];

    $conn = new mysqli($db_host, $db_username, $db_password, 'JeuxVideo');

    if($conn->connect_error)
      {
        die('Connexion échoué : ' .$conn->connect_error);
      }

    else
      {
        /*$req = mysqli_query($conn, 'SHOW TABLES FROM JeuxVideo');
        echo $req;*/
        echo '<!DOCTYPE html>
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
                      <h1 align="center">Accès à la base de données</h1>

                      <label><b>Choix de la table disponible</b></label>

                          </br>

                      <select name="choix">
                        <option value="choix1">1. Jeux vidéo</option>
                        <option value="choix2">2. Ville</option>
                        <option value="choix3">3. Test</option>
                      </select>

                      <input type="submit" id="submit" value="Valider" >

                    </form>
                </div>
            </body>
        </html>
        ';
      }
  }
?>
