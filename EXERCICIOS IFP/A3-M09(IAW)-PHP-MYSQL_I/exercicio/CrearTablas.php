<?php
    include("Conexion.php");

    $db = "Tienda";

    $conn = mysqli_connect($servername, $username, $password, $db);
    
    if (!$conn){
        die("Error al crear la conexion con la base de datos " . mysqli_error());
    } else {
        $sql = "CREATE TABLE Usuarios (
            ID_Usuario INT AUTO_INCREMENT PRIMARY KEY,
            Nombre VARCHAR(50) NOT NULL,
            Apellido1 VARCHAR(50) NOT NULL,
            Apellido2 VARCHAR(50) NOT NULL,
            Email VARCHAR(50) NOT NULL,
            Contraseña VARCHAR(12) NOT NULL
            );";
        $sql1 = "CREATE TABLE Productos (
            ID_Producto INT AUTO_INCREMENT PRIMARY KEY,
            Descripcion VARCHAR(50) NOT NULL,
            Foto VARCHAR(50) NOT NULL,
            Stock VARCHAR(50) NOT NULL
        );";
        if (mysqli_query($conn, $sql) && mysqli_query($conn, $sql1)) {
            echo "Creada correctamente";
        } else {
            echo "Tablas no creadas.". mysqli_error($conn);
        }
    }
?>
