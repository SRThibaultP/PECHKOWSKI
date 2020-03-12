<?php
//session_start();
if(isset($_POST['username']) && isset($_POST['password']))
{
    // connexion à la base de données
    $db_username = $_POST['username'];
    $db_password = $_POST['password'];
    $db_name     = 'JeuxVideo';
    $db_host     = 'localhost';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('could not connect to database');


        $requete = "SELECT count(*) FROM utilisateur where
              nom_utilisateur = '".$username."' and mot_de_passe = '".$password."' ";
        $exec_requete = mysqli_query($db,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        if($count!=0) // nom d'utilisateur et mot de passe correctes
          {
            $_SESSION['username'] = $username;
            echo 'Connexion reussi';
          }
        else
          {
            echo 'Connexion echoué'; // utilisateur ou mot de passe incorrect
          }

//mysqli_close($db); // fermer la connexion
?>
