<!DOCTYPE html>
<html>
<head>
<<<<<<< HEAD
  <title>Accueil</title>
  <link rel="stylesheet" href="CSS/style.css" media="screen" type="text/css" /> <!--Importation du CSS-->
</head>
<body>
  <a href="../index.php"><img id="deco" src="logout.png" width="50" height="50"/></a> <!--Bouton de déconexion-->
  <div id="container">                                                          <!--Création d'un bloc pour le CSS-->
    <form action="accueilBDD.php" method="POST">                                <!--Création d'un formulaire-->
      <h1>Connexion</h1>                                                        <!--Titre-->

      <label><b>Nom d'utilisateur</b></label>
      <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required> <!-- Case pour entrer le nom utilisateur -->

      <label><b>Mot de passe</b></label>
      <input type="password" placeholder="Entrer le mot de passe" name="password" required>  <!-- Case pour entrer le mot de passe -->

      <input type="submit" id='submit' value='Connexion' >                      <!-- Bouton de connection -->
=======
  <meta charset="utf-8">
  <!-- importer le fichier de style -->
  <link rel="stylesheet" href="CSS/style.css" media="screen" type="text/css" />
</head>
<body>
  <a href="../index.php"><img id="deco" src="logout.png" width="50" height="50"/></a>
  <div id="container">
    <!-- zone de connexion -->
    <form action="accueilBDD.php" method="POST">
      <h1>Connexion</h1>

      <label><b>Nom d'utilisateur</b></label>
      <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

      <label><b>Mot de passe</b></label>
      <input type="password" placeholder="Entrer le mot de passe" name="password" required>

      <input type="submit" id='submit' value='Connexion' >
>>>>>>> 9942f737d5e2c4b0283437a20f5f8222c1521530
    </form>
  </div>
</body>
<footer>
  <p>Joshua KOWALSKI - Thibault PECH</p>
</footer>
</html>
