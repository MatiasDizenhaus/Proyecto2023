<?php
session_start();
include ("conexion.php");

$dni=$_GET['dni'];
$contrasenia=$_GET['pass'];

// echo $usuario." ".$contrasenia;

$sql="SELECT IdJefe FROM clinica WHERE DNIJefe='".$dni."' and Contrasenia='".$contrasenia."'";



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