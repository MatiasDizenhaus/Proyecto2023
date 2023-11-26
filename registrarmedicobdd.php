<?php
session_start();
$host = "localhost";
$usuario = "root";
$contrasenia = "rootroot";
$bd = "gotasolidaria";
$conexion = mysqli_connect($host, $usuario, $contrasenia, $bd);

// Mensaje de bienvenida
echo "<h1>¡Registro enviado!</h1>";

$registroExitoso = false;
$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $IdClinica = $_SESSION['IDClinica'];
    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $FechaDeNacimiento = $_POST['FechaDeNacimiento'];
    $DNIMedico = $_POST['DNIMedico'];
    $Contrasenia = $_POST['Contrasenia'];
    $NumTelefono = $_POST['NumTelefono'];
    $Mail = $_POST['Mail'];
    $Matricula = $_POST['Matricula'];
    $IdClinica =$_SESSION['IDClinica']; //1 ; // Cambia este valor según tus necesidades
    $JefeDeHematologia = 0;

    $sql="SELECT DNIMedico FROM medicos WHERE DNIMedico=".$DNIMedico." AND IdClinica=".$IdClinica."";
//echo $sql;
    $data=$conexion->query($sql);

    if ($data->num_rows>0) {
        $mensaje = "Medico existente en esta clinica";
    }else{
        // Crear la consulta SQL
        $sql = "INSERT INTO medicos (Nombre, Apellido, FechaDeNacimiento, DNIMedico, Contrasenia, NumTelefono, Mail, Matricula, IdClinica, JefeDeHematologia) 
        VALUES ('$Nombre', '$Apellido', '$FechaDeNacimiento', $DNIMedico, '$Contrasenia', $NumTelefono, '$Mail', $Matricula, $IdClinica, $JefeDeHematologia)";
    //echo $sql;
        // Ejecutar la consulta SQL
        if ($conexion->query($sql) === TRUE) {
            $registroExitoso = true;
            $mensaje = "Registro exitoso.";
        } else {
            $mensaje = "Error al insertar los datos: " . $conexion->error;
        }
    }
}

$conexion->close();
?>

<!-- Resto del código HTML y formulario -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <input type="submit" name="submit" value="Seguir Registrando">
    <input type="submit" name="submit" value="Finalizar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($registroExitoso)) {
    if ($_POST["submit"] == "Finalizar") {
        echo "<p>¡Gracias por los registros hechos!</p>";
    } elseif ($_POST["submit"] == "Seguir Registrando") {
        header("Location: http://localhost/gotasolidaria/html/registrarmedicos.html"); // Corrige la URL de redirección

        exit();
    }
}

echo "<p>$mensaje</p>"; // Muestra el mensaje de éxito/error
?>
