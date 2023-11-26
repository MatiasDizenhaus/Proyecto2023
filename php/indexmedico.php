<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
</head>
<body>
    <form action="loginmedico.php" method="GET"> <!-- Cambiamos "action" a "loginmedico.php" -->
        <h1>Iniciar Sesión como medico</h1>
        <input type="text" name="dni" placeholder="DNI" required><br><br>
        <input type="password" name="pass" placeholder="Contraseña" required><br><br>
        <input type="submit" name="Registrar">
    </form>
</body>
</html>
