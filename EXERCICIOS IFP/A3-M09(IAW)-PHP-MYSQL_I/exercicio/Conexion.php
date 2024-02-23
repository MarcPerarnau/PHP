<?php
$servername = "localhost";
$username = "cliente";
$password = "cliente";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn){
    die("Conexion fallida: " . mysqli_connect_error());
}

?>
