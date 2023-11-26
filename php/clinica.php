<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registrarte como medico</title>
</head>
<body>
    <h1>Registrar clinica</h1>
    <form action="clinicabdd.php" method="GET">
        <input type="text" id="Nombre" placeholder="Nombre de la clinica" required><br><br>
        <input type="text" id="Direccion" placeholder="Direccion" required><br><br>
        <input type="text" id="JefeDeHematologia" placeholder="Jefe de hematologia" required><br><br>
        <input type="text" id="DNIJefe" placeholder="DNI del Jefe de hematologia " required><br><br>
        <input type="password" id="Contrasenia" placeholder="Contraseña" required><br><br>
                <input type="submit" name="Registrar">
    </form>
</body>
</html>
