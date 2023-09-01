<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registrarte</title>
</head>
<body>
    <form action="registro.php" method="POST">
        <h1>Registrarte</h1>
        <input type= "text" name="Nombre"  placeholder="Nombre"><br><br>
        <input type= "text" name="Apellido" placeholder="Apellido"><br><br>
        <input type= "text" name="DNI" placeholder="DNI" ><br><br>
        <input type= "password" name="Pass" placeholder="Contraseña"><br><br>
        <input type= "text" name="NumTelefono" placeholder="Numero de telefono"><br><br>
        <input type= "mail" name="Mail" placeholder="Mail"><br><br>
        <input type= "date" name="FechaDeNacimiento" placeholder="Fecha de nacimiento"><br><br>
        Genero: <select name="Genero" id="Genero">
                <option value="1">Masculino</option>
                <option value="2">Femenino</option>
                     </select>
                     </select> 
                     <br><br>
        <input type= "text" name="Peso" placeholder="Peso"><br><br> 
        
        <input type= "text" name="Altura" placeholder="Altura"><br><br>     
        <input type= "text" name="Direccion" placeholder="Dirección"><br><br>

        <input type="submit" name="Registrar">
    </form>

    <script>
        var pesoMin = 50;
        var peso = parseInt(pesoInput.value);
        if (idNan(peso) || peso < pesoMin){
            event.preventDefault();
            alert("El peso debe ser mayor a " + pesoMin);
        }
    </script>
</body>
</html>