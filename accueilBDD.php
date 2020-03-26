<<<<<<< HEAD
<!DOCTYPE html>
<html>
  <head>
    <title>Accueil BDD</title>
  </head>
</html>

<?php
if(isset($_POST['username']) && isset($_POST['password'])) {                    //Vérifie qu'on récupère le login & password de index.php
  $db_host     = 'localhost';                                                   //Host du serveur mysql (ici on est en local)
  $db_username = $_POST['username'];                                            //Récupération du nom utilisateur tapé par le client
  $db_password = $_POST['password'];                                            //Récupération du mdp tapé par le client
  $db_name     = 'JeuxVideo';                                                   //Nom de la BDD

  $conn = new mysqli($db_host, $db_username, $db_password, $db_name);           //On créé une variable 'connection' pour tester la validité de l'utilisateur et du mdp

  if($conn->connect_error) {                                                    //Vérification de la connection
    echo '<a href="../index.php"><img id="deco" src="retour.png" width="50" height="50"></a>';//Bouton retour
    die('Connexion échoué : ' .$conn->connect_error);                           //Si le nom d'utilisateur ou le mdp est incorrecte, on affiche un message error
  }
  else {
    $sql = 'SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = "JeuxVideo"';//Affichage des tables de la BDD JeuxVideo
    $result = $conn->query($sql);                                               //Envoie la requête sql avec les logins
    if ($result->num_rows > 0) {                                                //Si la requete marche, on récupère le nombre de lignes et on vérifie qu'elles sont supérieur à 0
      echo '<div id="box">';                                                    //Création d'un tableau
      echo "<br>";
      echo "<table id='listeTab' border='1'>";
      echo "<td>Liste des tables disponibles :</td>";
      while($row = $result->fetch_assoc()) {                                    //Tant que on récupère des informations
        echo "<tr>";
        foreach ($row as $field => $value) {                                    //Pour chaque informations
          echo "<td>" . $value . "</td>";                                       //On crée une ligne
=======
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
>>>>>>> 9942f737d5e2c4b0283437a20f5f8222c1521530
        }
        echo "</tr>";
      }
      echo "</table></br></div>";
<<<<<<< HEAD
    }
    else {                                                                      //Sinon il n'y a aucune table
=======
    } 
    else {
>>>>>>> 9942f737d5e2c4b0283437a20f5f8222c1521530
      echo "Erreur, aucune table détectée.";
      echo "</div>";
    }

<<<<<<< HEAD
    echo '<!DOCTYPE html>                                                       <!--Affichage du reste de la page Web-->
    <html>
    <head>
    <meta charset="utf-8">
=======
    echo '<!DOCTYPE html>
    <html>
    <head>
    <meta charset="utf-8">
    <!-- importer le fichier de style -->
>>>>>>> 9942f737d5e2c4b0283437a20f5f8222c1521530
    <link rel="stylesheet" href="CSS/style.css" media="screen" type="text/css" />
    </head>
    <body>
    <div id="container">
<<<<<<< HEAD

    <form action="accueilTABLE.php" method="POST">
    <h1 align="center">Accès à la base de données</h1>
    </br>
    <label><b>Choix de la table disponible</b></label>
    </br>

    <select name="table">                                                       <!--Menu déroulant-->
    <option value="jeux_video">Jeux vidéo</option>
    <option value="test">Test</option>
    <option value="villes_france_free">Villes</option>
    </select>

    <input type="hidden" name="username" value="'.$db_username.'">              <!--Envoie du login sur la prochaine page web-->
    <input type="hidden" name="password" value="'.$db_password.'">              <!--Idem avec le mdp-->
    <input type="submit" id="submit" value="Valider" >
    </form>

    <form action="accueilTABLE.php" method="POST">                              <!--Mode manuel (écrire le nom de la table)-->
=======
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
>>>>>>> 9942f737d5e2c4b0283437a20f5f8222c1521530
    <label><b>Mode manuel</b></label>
    <input type="text" placeholder="Nom de la table" name="table">
    <input type="hidden" name="username" value="'.$db_username.'">
    <input type="hidden" name="password" value="'.$db_password.'">
    <input type="submit" id="submit" value="Valider">
    </form>
    </div>
<<<<<<< HEAD
    <a href="../index.php"><img id="deco" src="retour.png" width="50" height="50"></a><!--Bouton retour-->
=======
    <a href="../index.php"><img id="deco" src="retour.png"></a>
>>>>>>> 9942f737d5e2c4b0283437a20f5f8222c1521530
    </body>
    </html>
    ';
  }
}
?>
