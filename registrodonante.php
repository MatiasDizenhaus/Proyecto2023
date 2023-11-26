<?php
date_default_timezone_set("America/Argentina/Buenos_Aires");
include ("conexion.php");

// echo $usuario." ".$contrasenia;

//echo $_GET['FechaDeNacimiento'];

$sql="INSERT INTO donante (Nombre,Apellido,DNIDonante,Contrasenia,NumTelefono,Mail,FechaDeNacimiento,IDGenero,Peso,Altura,IDProvincia) VALUES ('".$_REQUEST['Nombre']."','".$_REQUEST['Apellido']."','".$_REQUEST['DNI']."','".$_REQUEST['Pass']."','".$_REQUEST['NumTelefono']."','".$_REQUEST['Mail']."','".$_REQUEST['FechaDeNacimiento']."',".$_REQUEST['Genero'].",".$_REQUEST['Peso'].",'".$_REQUEST['Altura']."','".$_REQUEST['Direccion']."')";

//echo $sql;

 if ($_SERVER["REQUEST_METHOD"] = "GET"){
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

        if ($edad <= $EdadMin || $edad >= $EdadMax || $Peso <= $PesoMin){
            echo "Lo sentimos, no cumples con los requisitos necesarios para poder donar sangre";
        } else {
            session_start();
            $_SESSION['dni']=$_REQUEST['DNI'];
            header('Location: encuesta.php');
           // echo "Bienvenido " . $Nombre ." " . $Apellido ;
        }
    }

 

$datos=$conexion->query($sql);

$conexion->close();

?>