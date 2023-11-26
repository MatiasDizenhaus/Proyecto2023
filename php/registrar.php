<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registrarte</title>
</head>
<body>
    <form action="registro.php" method="GET">
        <h1>Registrarte</h1>
        <input type="text" name="Nombre" placeholder="Nombre" required><br><br>
        <input type="text" name="Apellido" placeholder="Apellido" required><br><br>
        <input type="text" name="DNI" placeholder="DNI" required><br><br>
        <input type="password" name="Pass" placeholder="Contraseña" required><br><br>
        <input type="text" name="NumTelefono" placeholder="Numero de telefono" required><br><br>
        <input type="email" name="Mail" placeholder="Mail" required><br><br>
        <input type="date" name="FechaDeNacimiento" placeholder="Fecha de nacimiento" required><br><br>
        Genero: <select name="Genero" id="Genero" required>
            <option value="1">Masculino</option>
            <option value="2">Femenino</option>
        </select>
        <br><br>
        <input type="text" name="Peso" placeholder="Peso" required><br><br> 
        <input type="text" name="Altura" placeholder="Altura" required><br><br>     
        <select name="IDProvincia" id="Provincia">
                <option value="1">Ciudad Autonoma de Buenos Aires</option>
                <option value="2">Buenos Aires</option>
                <option value="3">Catamarca</option>
                <option value="4">Chaco</option>
                <option value="5">Chubut</option>
                <option value="6">Cordoba</option>
                <option value="7">Corrientes</option>
                <option value="8">Entre Rios</option>
                <option value="9">Formosa</option>
                <option value="10">Jujuy</option>
                <option value="11">La Pampa</option>
                <option value="12">La Rioja</option>
                <option value="13">Mendoza</option>
                <option value="14">Misiones</option>
                <option value="15">Neuquen</option>
                <option value="16">Rio Negro</option>
                <option value="17">Salta</option>
                <option value="18">San Juan</option>
                <option value="19">San Luis</option>
                <option value="20">Santa Cruz</option>
                <option value="21">Santa Fe</option>
                <option value="22">Santiago del Estero</option>
                <option value="23">Tierra del Fuego</option>
                <option value="24">Tucuman</option>
                     </select>  
                     <br><br><br><br>

                     <input type="submit" value="Registrar">

    </form>

    <script>
        var pesoInput = document.querySelector('input[name="Peso"]');
        var pesoMin = 50;
        pesoInput.addEventListener('input', function () {
            var peso = parseFloat(pesoInput.value);
            if (isNaN(peso) || peso < pesoMin) {
                pesoInput.setCustomValidity("El peso debe ser mayor o igual a " + pesoMin);
            } else {
                pesoInput.setCustomValidity("");
            }
        });
    </script>
</body>
</html>