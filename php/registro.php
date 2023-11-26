<?php
date_default_timezone_set("America/Argentina/Buenos_Aires");
include("conexion.php");


// echo $usuario." ".$contrasenia;

//echo $_GET['FechaDeNacimiento'];

$sql="INSERT INTO donante (Nombre,Apellido,DNIDonante,Contrasenia,NumTelefono,Mail,FechaDeNacimiento,IDGenero,Peso,Altura,IDProvincia) VALUES ('".$_REQUEST['Nombre']."','".$_REQUEST['Apellido']."','".$_REQUEST['DNIDonante']."','".$_REQUEST['Pass']."','".$_REQUEST['NumTelefono']."','".$_REQUEST['Mail']."','".$_REQUEST['FechaDeNacimiento']."',".$_REQUEST['Genero'].",".$_REQUEST['Peso'].",'".$_REQUEST['Altura']."',".$_REQUEST['IDProvincia'].")";



//echo $sql;
if ($_SERVER["REQUEST_METHOD"] == "GET") {
     $Nombre = $_GET ["Nombre"];
     $Apellido = $_GET ["Apellido"];
     $Peso = $_GET["Peso"];
     $PesoMin = 50;
    $Nombre = $_GET ["Nombre"];
    $Apellido = $_GET ["Apellido"];
    $FechaDeNacimiento = $_GET["FechaDeNacimiento"];
    $EdadMin = 18;
    $EdadMax = 65;
   
    //calcular la edad 
    $hoy = new DateTime();
    $nacimiento = new DateTime($FechaDeNacimiento); 
    $diferencia = $nacimiento-> diff($hoy);
    $edad = $diferencia->y;

    if (false) {
        echo "OK";
    } else {
            //echo $sql;
            echo "OK";
            $datos=$conexion->query($sql);            
            session_start();
            $_SESSION['dni']=$_REQUEST['DNIDonante'];
            //header('Location: ../html/formulario_donante.html');
            exit;
        }
    }

$conexion->close();

?>