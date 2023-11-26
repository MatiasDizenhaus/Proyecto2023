<?php
/* Configuración de la base de datos */
$host = "localhost";
$usuario = "root";
$contrasenia = "rootroot";
$bd = "gotasolidaria";


// Conexión a la base de datos
$conexion = mysqli_connect($host, $usuario, $contrasenia, $bd);


if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}


// Mensaje de bienvenida

echo "<h1>Clinica registrada</h1>";


// Sentencia SQL para crear la tabla si no existe
/*
$sql_create_table = "
CREATE TABLE IF NOT EXISTS clinica (
    IdClinica INT AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(255) NOT NULL,
    Direccion VARCHAR(255) NOT NULL,
    IdJefe INT NOT NULL
)";


if ($conexion->query($sql_create_table) === TRUE) {
    // La tabla existe o se ha creado correctamente
} else {
    echo "Error al crear la tabla 'clinica': " . $conexion->error;
}
*/

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $Nombre = $_GET['Nombre'];
    $Direccion = $_GET['Direccion'];
    $IdJefe = $_GET['JefeDeHematologia'];
    $DNIJefe = $_GET['DNIJefe'];
    $Contrasenia = $_GET['Contrasenia'];
   // $IDClinica = "SELECT IDClinica FROM clinica";


    if (empty($Nombre) || empty($Direccion) || empty($IdJefe) || empty($DNIJefe) || empty($Contrasenia)) {
        echo         header('Location: http://localhost/gotasolidaria/html/registrarmedicos.html');
    } else {

    // Sentencia SQL para insertar datos en la tabla
    $sql = "INSERT INTO clinica (Nombre, Direccion, IdJefe, DNIJefe, Contrasenia)
            VALUES ('$Nombre', '$Direccion', '$IdJefe', $DNIJefe, '$Contrasenia')";

//echo $sql;

    if ($conexion->query($sql) === TRUE) {
        $lastid = mysqli_insert_id($conexion); 
        echo "La clínica se ha registrado exitosamente.";
        session_start();
        $_SESSION['IDClinica']=$lastid;
        header('Location: http://localhost/gotasolidaria/html/registrarmedicos.html');
    } else {
        echo "Error al registrar la clínica: " . $conexion->error;
    }
}
}

//header("Location: http://localhost/gotasolidaria/php/registrarmedicos.html");

// Cerrar la conexión a la base de datos
$conexion->close();

?>


