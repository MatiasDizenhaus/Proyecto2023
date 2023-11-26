<?php

include ("conexion.php");

$dni=$_REQUEST['dni'];
$contrasenia=$_REQUEST['pass'];

 //echo $dni." ".$contrasenia;

$sql="SELECT Nombre,Apellido FROM donante WHERE DNIDonante='".$dni."' and Contrasenia='".$contrasenia."'";


//echo $sql;

$datos=$conexion->query($sql);

if ($datos->num_rows > 0) {
    $datousuario = $datos->fetch_assoc();
    session_start();
    // Almacenar información del usuario en la sesión
    $_SESSION['nombre'] = $datousuario['Nombre'];
    $_SESSION['apellido'] = $datousuario['Apellido'];

    echo "OK";
    // Redirigir al usuario a la página de bienvenida
    //header("Location: http://localhost/gotasolidaria/html/paginaprincipal.html");
} else {
    echo "NO";
}

$conexion->close();
?>