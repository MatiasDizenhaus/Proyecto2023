<?php
session_start();
include("conexion.php");

$dni = $_GET['dni'];
$contrasenia = $_GET['pass'];

// Selecciona el Nombre y el Apellido en la consulta SQL para almacenarlos en la sesión.
$sql = "SELECT Nombre, Apellido FROM medicos WHERE DNIMedico='" . $dni . "' and Contrasenia='" . $contrasenia . "'";
//echo $sql;
$datos = $conexion->query($sql);

if ($datos->num_rows > 0) {
    $datousuario = $datos->fetch_assoc();

    // Almacenar información del usuario en la sesión
    $_SESSION['Nombre'] = $datousuario['Nombre'];
    $_SESSION['Apellido'] = $datousuario['Apellido'];

    echo "OK";
    // Redirigir al usuario a la página de bienvenida
   //lhost/gotasolidaria/html/candidatos.html");
} else {
    echo "NO";
    
}

$conexion->close();
?>
