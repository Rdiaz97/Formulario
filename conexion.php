
<?php

$conexion = mysqli_connect("localhost", "root", "", "contactos");

if (isset ($conexion)) {
    echo "conexion realizada";
}


// $email = $_GET["email"]?? NULL;
// $sql="INSERT INTO contactos(correo)VALUES ('$email')";
// mysqli_query($conexion, $sql);
// if($email=1){
//     header("location:index.html");
// }
?>