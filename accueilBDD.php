<?php
if(isset($_POST['username']) && isset($_POST['password']))
{
    // connexion à la base de données
    $db_host     = 'localhost';
    $db_username = $_POST['username'];
    $db_password = $_POST['password'];
    $db_name     = 'JeuxVideo';

    $conn = new mysqli($db_host, $db_username, $db_password, $db_name);

    if($conn->connect_error)
      {
        die('Connexion échoué : ' .$conn->connect_error);
      }

    else
      {
        $sql = 'SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = "JeuxVideo"';
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
        echo "<tr><td>" .$row["TABLE_NAME"]. "</td><td>";
        }
        echo "</table>";
        } else { echo "0 results"; }

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
