<!DOCTYPE html>
    <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="CSS/style.css" media="screen" type="text/css" />
    </head>

<?php
if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['table'])) {
  // connexion à la base de données
  $db_host     = 'localhost';
  $db_username = $_POST['username'];
  $db_password = $_POST['password'];
  $db_name     = 'JeuxVideo';
  $db_table    = $_POST['table'];

  $conn = new mysqli($db_host, $db_username, $db_password, $db_name);

  if($conn->connect_error) {
    die('Connexion échoué : ' .$conn->connect_error);
  }

  else {
    $sql = "SELECT * FROM $db_table";
    $sqlTable = "SHOW COLUMNS FROM $db_table";
    $result = $conn->query($sql);
    $resultTable = mysqli_query($conn,$sqlTable);

    echo '<header id="titreTable">
      <h1>'.$db_table.'</h1>
    </header>';

    if ($result->num_rows > 0) {
      // output data of each row
      echo "<br>";
      echo '<table id="listeTab" border="1">';
      while($rowTable = mysqli_fetch_array($resultTable)){
        echo "<td>";
        echo $rowTable['Field']."</td>";
      }
      while($row = $result->fetch_assoc()) {
        echo "<tr>";
        foreach ($row as $field => $value) {
          echo "<td>" . $value . "</td>";
        }
        echo "</tr>";
      }
      echo "</table>";
    }
    else {
      echo "<p>Erreur, nom de table invalide.</p>";
      echo '<a href="../index.php"><img id="deco" src="retour.png" align="right"></a>';
    }
    switch ($db_table) {
      case 'jeux_video':
        echo '<form action="accueilTABLE.php" method="POST">
               <label><b>Ajouter un enregistrement</b></label>
               <input type="number" placeholder="id" name="ID">
               <input type="text" placeholder="nom" name="nom">
               <input type="text" placeholder="possesseur" name="possesseur">
               <input type="text" placeholder="console" name="console">
               <input type="number" placeholder="prix" name="prix">
               <input type="number" placeholder="nbre_joueurs_max" name="nbre_joueurs_max">
               <input type="text" placeholder="commentaires" name="commentaires">

               <input type="hidden" name="username" value="<?php echo $db_username; ?>">
               <input type="hidden" name="password" value="<?php echo $db_password; ?>">
               <input type="hidden" name="table" value="<?php echo $db_table; ?>">
               <input type="submit" id="submit" value="Valider">
              </form>';
      break;
      
      case 'test':
        echo '<form action="accueilTABLE.php" method="POST">
          <label><b>Ajouter un enregistrement</b></label>
          <input type="number" placeholder="id" name="id">
        
          <input type="hidden" name="username" value="<?php echo $db_username; ?>">
          <input type="hidden" name="password" value="<?php echo $db_password; ?>">
          <input type="hidden" name="table" value="<?php echo $db_table; ?>">
          <input type="submit" id="submit" value="Valider">
        </form>';
        break;

      case 'villes_france_free':
        echo '<form action="accueilTABLE.php" method="POST">
               <label><b>Ajouter un enregistrement</b></label>
               <input type="number" placeholder="ville_id" name="ville_id">
               <input type="number" placeholder="ville_departement" name="ville_departement">
               <input type="text" placeholder="ville_slug" name="ville_slug">
               <input type="text" placeholder="ville_nom" name="ville_nom">
               <input type="text" placeholder="ville_nom_simple" name="ville_nom_simple">
               <input type="text" placeholder="ville_nom_reel" name="ville_nom_reel">
               <input type="text" placeholder="ville_nom_soundex" name="ville_nom_soundex">
               <input type="text" placeholder="ville_nom_metaphone" name="ville_nom_metaphone">
               <input type="number" placeholder="ville_code_postal" name="ville_code_postal">
               <input type="number" placeholder="ville_commune" name="ville_commune">
               <input type="number" placeholder="ville_code_commune" name="ville_code_commune">
               <input type="number" placeholder="ville_arrondissement" name="ville_arrondissement">
               <input type="number" placeholder="ville_canton" name="ville_canton">
               <input type="number" placeholder="ville_amdi" name="ville_amdi">
               <input type="number" placeholder="ville_population_2010" name="ville_population_2010">
               <input type="number" placeholder="ville_population_1999" name="ville_population_1999">
               <input type="number" placeholder="ville_population_2012" name="ville_population_2012">
               <input type="number" placeholder="ville_densite_2010" name="ville_densite_2010">
               <input type="number" placeholder="ville_surface" name="ville_surface">
               <input type="number" placeholder="ville_longitude_deg" name="ville_longitude_deg">
               <input type="number" placeholder="ville_latitude_deg" name="ville_latitude_deg">
               <input type="number" placeholder="ville_longitude_grd" name="ville_longitude_grd">
               <input type="number" placeholder="ville_latitude_grd" name="ville_latitude_grd">
               <input type="number" placeholder="ville_longitude_dms" name="ville_longitude_dms">
               <input type="number" placeholder="ville_latitude_dms" name="ville_latitude_dms">
               <input type="number" placeholder="ville_zmin" name="ville_zmin">
               <input type="number" placeholder="ville_zmax" name="ville_zmax">

               <input type="hidden" name="username" value="<?php echo $db_username; ?>">
               <input type="hidden" name="password" value="<?php echo $db_password; ?>">
               <input type="hidden" name="table" value="<?php echo $db_table; ?>">
               <input type="submit" id="submit" value="Valider">
              </form>';
      break;

      default:
        echo '<p>Editeur indisponible</p>';
      break;
    }
  }
}
?>
