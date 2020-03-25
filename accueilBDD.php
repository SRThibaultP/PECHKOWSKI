<?php
if(isset($_POST['username']) && isset($_POST['password'])) {
  // connexion à la base de données
  $db_host     = 'localhost';
  $db_username = $_POST['username'];
  $db_password = $_POST['password'];
  $db_name     = 'JeuxVideo';

  $conn = new mysqli($db_host, $db_username, $db_password, $db_name);

  if($conn->connect_error) {
    die('Connexion échoué : ' .$conn->connect_error);
  }
  
  else {
    $sql = 'SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = "JeuxVideo"';
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      // output data of each row
      echo '<div id="box">';
      echo "<br>";
      echo "<table id='listeTab' border='1'>";
      echo "<td>Liste des tables disponibles :</td>";
      while($row = $result->fetch_assoc()) {
        echo "<tr>";
        foreach ($row as $field => $value) {
          echo "<td>" . $value . "</td>";
        }
        echo "</tr>";
      }
      echo "</table></br></div>";
    } 
    else {
      echo "Erreur, aucune table détectée.";
      echo "</div>";
    }

    echo '<!DOCTYPE html>
    <html>
    <head>
    <meta charset="utf-8">
    <!-- importer le fichier de style -->
    <link rel="stylesheet" href="CSS/style.css" media="screen" type="text/css" />
    </head>
    <body>
    <div id="container">
    <!-- zone de connexion -->

    <form action="accueilTABLE.php" method="POST">
    <h1 align="center">Accès à la base de données</h1>
    <p></p>
    <label><b>Choix de la table disponible</b></label>

    </br>

    <select name="table">
    <option value="jeux_video">Jeux vidéo</option>
    <option value="test">Test</option>
    <option value="villes_france_free">Villes</option>
    </select>
    <input type="hidden" name="username" value="'.$db_username.'">
    <input type="hidden" name="password" value="'.$db_password.'">
    <input type="submit" id="submit" value="Valider" >

    </form>
    <form action="accueilTABLE.php" method="POST">
    <label><b>Mode manuel</b></label>
    <input type="text" placeholder="Nom de la table" name="table">
    <input type="hidden" name="username" value="'.$db_username.'">
    <input type="hidden" name="password" value="'.$db_password.'">
    <input type="submit" id="submit" value="Valider">
    </form>
    </div>
    <a href="../index.php"><img id="deco" src="retour.png"></a>
    </body>
    </html>
    ';
  }
}
?>
