<?php
include ("Conexion.php");

$db = "Tienda";
$conn = mysqli_connect($servername, $username, $password, $db);

if (!$conn){
    die("Error " . mysqli_error());
} else {
    $sql = "INSERT INTO usuarios (Nombre, Apellido1, Apellido2, Email, Contraseña)
    VALUES ('Marc','Perarnau','Olaya','m.liang.perarnau@gmail.com','12345');";

    $sql .= "INSERT INTO usuarios (Nombre, Apellido1, Apellido2, Email, Contraseña)
    VALUES ('Alex','Llunell','Pahísa','allunell@gmail.com','12345');";

    $sql .= "INSERT INTO usuarios (Nombre, Apellido1, Apellido2, Email, Contraseña)
    VALUES ('Dominick','Xampp','Navarrosa','Navnick@gmail.com','12345');";

    $sql .= "INSERT INTO productos (Descripcion, Foto, Stock)
    VALUES ('blblblblb','C:/Desktop/Perfil.jpg','256')";

    $sql .= "INSERT INTO productos (Descripcion, Foto, Stock)
    VALUES ('blblblblblb','C:/Desktop/PerfilOrga.web','524')";

    $sql .= "INSERT INTO productos (Descripcion, Foto, Stock)
    VALUES ('lblblbllbl','C:/Download/desktop2.png','12')";

    $sql .= "INSERT INTO productos (Descripcion, Foto, Stock)
    VALUES ('lblblblb','C:/Download/Fotos/fg.jpeg','5')";

    $sql .= "INSERT INTO productos (Descripcion, Foto, Stock)
    VALUES ('dndnndnd','D:/Fotos/hlg.png','1')";


    if (mysqli_multi_query($conn, $sql)) {
        echo "Datos insertados correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
