<?php
include("configuracion.php");

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  echo("Conexion fallada " . $conn->connect_error);
  exit();

}
else{
    echo "Se conecto de manera correcta";
}

?>