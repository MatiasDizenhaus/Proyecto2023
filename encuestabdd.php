<?php
session_start();
//echo($_SESSION['dni']);

$host = "localhost";
$usuario = "root";
$contrasenia = "rootroot";
$bd = "gotasolidaria";

$conexion = mysqli_connect($host, $usuario, $contrasenia, $bd);

if (!$conexion) {
    die("Error de conexión a la base de datos: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $opcion = $_GET['opcion'];
    $IDDonante =$_SESSION['dni'];
    $Piercings = $_GET['Piercings'];
    $Tatuajes = $_GET['Tatuajes'];
    $Enfermedades = $_GET['Enfermedades'];
    $UltimaDonacion = $_GET['UltimaDonacion'];
    $Operaciones = $_GET['Operaciones'];
    $IDSangre = $_GET['IDSangre'];
    $Embarazo = $_GET['Embarazo'];
    $Fumas = $_GET['Fumas'];
    $Drogas = $_GET['Drogas'];

    // Iniciar una transacción
    mysqli_autocommit($conexion, false);

    //$sql1 = "INSERT INTO donante (DNIDonante) VALUES ($IDDonante)";
    $sql2 = "INSERT INTO encuestainfomedica (DNIDonante, Piercings, Tatuajes, Enfermedades, UltimaDonacion, Operaciones, IDSangre, Embarazo, Fumas, Drogas) 
    VALUES ($IDDonante,$Piercings, $Tatuajes, $Enfermedades, $UltimaDonacion, $Operaciones, $IDSangre, $Embarazo, $Fumas, $Drogas)";
echo $sql2;
    $entrar = "1";
    $rechazo = "0";

    if ($Piercings == $rechazo || $Tatuajes == $rechazo || $Enfermedades == $rechazo || $UltimaDonacion == $rechazo || $Operaciones == $rechazo || $Embarazo == $rechazo || $Fumas == $rechazo || $Drogas == $rechazo) {
        echo "Hay condiciones por las cuales no puedes donar sangre. Lo sentimos, gracias por intentar ayudar de igual manera!";
        //header('Location: '.$nopodesdonar.php);
    } else {
        // Ejecutar las consultas dentro de la misma transacción
        if (mysqli_query($conexion, $sql2)) {//mysqli_query($conexion, $sql1) && 
            // Confirmar la transacción
            mysqli_commit($conexion);
            echo "Puedes donar sangre. Gracias por aportar tu granito de arena a esta causa!";
            //header('Location: '.$podesdonar.php);
        } else {
            // Revertir la transacción en caso de error
            mysqli_rollback($conexion);
            echo "Datos no registrados!" . mysqli_error($conexion);
        }
    }

    // Restaurar la configuración de autocommit
    mysqli_autocommit($conexion, true);
} else {
    echo "No se ha enviado una solicitud GET.";
}

mysqli_close($conexion);

?>
