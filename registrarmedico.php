<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Médicos</title>
</head>
<body>
    <h1>Registro de Médicos</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
        <label for="Nombre">Nombre:</label>
        <input type="text" id="Nombre" id="Nombre" required><br><br>

        <label for="Apellido">Apellido:</label>
        <input type="text" id="Apellido" id="Apellido" required><br><br>

        <label for="FechaDeNacimiento">Fecha de Nacimiento:</label>
        <input type="date" id="FechaDeNacimiento" id="FechaDeNacimiento" required><br><br>

        <label for="DNIMedico">DNI del Médico:</label>
        <input type="text" id="DNIMedico" id="DNIMedico" required><br><br>

        <label for="Contrasenia">Contraseña:</label>
        <input type="password" id="Contrasenia" id="Contrasenia" required><br><br>

        <label for="NumTelefono">Número de Teléfono:</label>
        <input type="text" id="NumTelefono" id="NumTelefono" required><br><br>

        <label for="Mail">Correo Electrónico:</label>
        <input type="email" id="Mail" id="Mail" required><br><br>

        <label for="Matricula">Matrícula:</label>
        <input type="text" id="Matricula" id="Matricula" required><br><br>
        
        <!-- Puedes agregar más campos aquí según tus necesidades -->

        <input type="submit" name="submit" value="Seguir Registrando">
        <input type="submit" name="submit" value="Finalizar">
        <?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["submit"])) {
        // Comprueba cuál de los botones se ha presionado
        if ($_GET["submit"] == "Seguir Registrando") {
            // Redirige a la misma página
            header("Location: " . $_SERVER['PHP_SELF']);
            exit();
        } elseif ($_GET["submit"] == "Finalizar") {
            // Muestra un mensaje de agradecimiento
            echo "Gracias por los registros hechos!";
        }
    }
}
?>
    </form>
</body>
</html>
