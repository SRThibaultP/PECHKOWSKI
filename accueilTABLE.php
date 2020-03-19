<?php
//if(isset($_POST['username']) && isset($_POST['password']))
if(1==1)
{
    // connexion à la base de données
    $db_host     = 'localhost';
    $db_username = $_POST['username'];
    $db_password = $_POST['password'];
    $db_name     = 'JeuxVideo';
    $table       = $_POST['table'];

    $conn = new mysqli($db_host, $db_username, $db_password, $db_name);

    if($conn->connect_error)
      {
        die('Connexion échoué : ' .$conn->connect_error);
      }

    else
      {
        $desc = "DESCRIBE $";
        $sql = "SELECT * FROM $table";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        // output data of each row
        echo "<br>";
        echo "<table border='1'>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
             foreach ($row as $field => $value) { // I you want you can right this line like this: foreach($row as $value) {
                echo "<td>" . $value . "</td>"; // I just did not use "htmlspecialchars()" function. 
            }   
        echo "</tr>";
        }
        echo "</table>";
        } else { echo "0 results"; }
      }
  }
?>
