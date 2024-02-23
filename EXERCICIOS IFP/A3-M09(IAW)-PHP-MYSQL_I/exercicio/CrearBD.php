<?php
include("Conexion.php");

if (!$conn){
    die("Conexion fallida: " . mysqli_connect_error());
} else {
    $sql = "CREATE DATABASE Tienda";
    if (mysqli_query($conn, $sql)){
        echo "Base de datos creada exitosamente";
    } else {
        echo "Error al crear la base de datos: " . mysqli_error($conn);
    }
}
?>
