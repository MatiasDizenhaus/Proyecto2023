<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>buscar personas</title>
    <link rel="stylesheet" href="../css/buscador.css"> 
</head>
<body>
<button type="button" class="logo" id="volver">
        <img src="../imagenes/logo2.0.png" width="250px" height="50px"/>
      </button>    
      <div class="logo-buttons">
        <a href="#" class="logo-button"><img src="../imagenes/lamparita.png" alt="Logo 1" id="suge"></a>
        <a href="#" class="logo-button"><img src="../imagenes/foto_gota.png" alt="Logo 2" id="_registro_donante"></a>
        <a href="#" class="logo-button"><img src="../imagenes/foto_cruz.png" alt="Logo 3" id="iniciojefe"></a>
        <a href="#" class="logo-button"><img src="../imagenes/foto_inicio.png" alt="Logo 4" id="_iniciar_sesion"></a>    
    </div>
       
    <div><p class="sugerencias">Sugerencias</p></div>
    <div><p class="clinica">Registro de Donante</p></div>
    <div><p class="donante">Registro de médicos</p></div>
    <div><p class="Iniciar-sesion">Iniciar sesión</p></div>
</body>
<script type="text/javascript" src="../js/jquery-3.7.1.js"></script>
 <script type="text/javascript" src="../js/redirecciones.js"></script>
</html>
<?php
$host = "localhost";
$usuario = "root";
$contrasenia = "rootroot";
$bd = "gotasolidaria";

$conn = new mysqli($host, $usuario, $contrasenia, $bd);

// Verificar la conexión
if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}

// Obtener los valores del formulario
$provincia = $_POST['Provincia'];
$tipo_sangre = $_POST['Sangre'];

// Consulta SQL para buscar donantes que coincidan con la provincia y el tipo de sangre
$sql = "SELECT D.Nombre,D.Apellido,D.NumTelefono,D.Mail FROM donante D INNER JOIN encuestainfomedica E ON D.DNIDonante=E.DNIDonante WHERE E.IDSangre =".$tipo_sangre." and D.IDProvincia=".$provincia."";
//echo $sql;
$result = $conn->query($sql);

// Mostrar los resultados
$sal='';
if ($result->num_rows > 0) {
    $sal = "<link rel='stylesheet' type='text/css' href='../css/resultados.css'>";
    $sal .= "<h2>Resultados:</h2>";
    $sal .= "<table>";
    $sal=$sal. "<tr><th>Nombre</th><th>Apellido</th><th>Numero de telefono</th><th>Mail</th></tr>";

    while ($row = $result->fetch_assoc()) {
        $sal=$sal. "<tr><td>" . $row['Nombre'] . "</td><td>" . $row['Apellido'] . "</td><td>". $row['NumTelefono'] . "</td><td>" .  $row['Mail'] . "</td></tr>";
    }
    $sal=$sal. "</table>";
} else {
    $sal = "<p class='no-result'>No se encontraron donantes que coincidan con los criterios de búsqueda.</p>";
}
echo $sal;
// Cerrar la conexión a la base de datos
$conn->close();
?>
