<!DOCTYPE html>
<html>
<head>
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
    </form>
  </div>
</body>
<footer>
  <p>Joshua KOWALSKI - Thibault PECH</p>
</footer>
</html>
