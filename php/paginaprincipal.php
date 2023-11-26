<?php
session_start(); // Inicia o reanuda la sesión

if (!isset($_SESSION['nombre'])) {
    header("Location: index.php"); // Redirige si no hay una sesión activa
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
</head>
<body>
    <h1>Bienvenido, <?php echo $_SESSION['nombre'] . ' ' . $_SESSION['apellido']; ?></h1>
    <p><a href="cerrar_sesion.php">Cerrar sesión</a></p>
</body>
</html>
