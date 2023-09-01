<?php session_start();
include ("conexion.php");
?>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Encuesta informacion medica</title>
</head>
<body>
    <form action="./encuestabdd.php" method = "POST">
        <h1>Encuesta informacion medica </h1>
         
        <input type= "text" name="DNIDonante" placeholder="DNI" value=<?php echo $_SESSION['dni'] ?>><br><br>
         
            Piercings: <select name="Piercings" id="Piercings">
                <option value="Sí">Realizado hace mas de un año/no tengo</option>
                <option value="No">Realizado hace menos de un año</option>
                     </select> 
                     <br><br>

                     Tatuajes: <select name="Tatuajes" id="Tatuajes ">
                <option value="Sí">Realizado hace mas de un año/no tengo</option>
                <option value="No">Realizado hace menos de un año</option>
                     </select> 
                     <br><br>

            ¿Padeces alguna enfermedad de tipo infecciosa/transmisible por sangre/cronica grave? <select name="Enfermedades" id="Enfermedades">
                <option value="Si">No</option>
                <option value="No">Sí</option>
                     </select> 
                     <br><br>

            UltimaDonacion:<select name="UltimaDonacion" id="UltimaDonacion">
                <option value="Sí">Hace mas de 6 meses / nunca done</option>
                <option value="No">Hace menos de 6 meses</option>
                     </select> 
                     <br><br>

            Intervencion quirurgica / endoscopia: <select name="Operaciones" id="Operaciones">
                <option value="Sí">No/Hace mas de un año</option>
                <option value="No">Recientes, hace menos de un año</option>
                     </select>
                     </select> 
                     <br><br>

           Tipo de sangre: <select name="IDSangre" id="IDSangre">
                <option value="1">A+</option>
                <option value="2">A-</option>
                <option value="3">B+</option>
                <option value="4">B-</option>
                <option value="5">AB+</option>
                <option value="6">AB-</option>
                <option value="7">0+</option>
                <option value="8">0-</option>
                     </select>  
                     <br><br>

            Estas embarazada?: <select name="Embarazo" id="Embarazo">
                <option value="Sí">No</option>
                <option value="No">Sí</option>
                     </select> 
                     <br><br>

            Fumas?: <select name="Fumas" id="Fumas">
                <option value="Sí">No</option>
                <option value="No">Sí</option>
                     </select>
                     <br><br>

           Consumis drogas?: <select name="Drogas" id="Drogas">
                <option value="Sí">No</option>
                <option value="No">Sí</option>
                     </select> 
                     <br><br>

        <input type="submit" name="Enviar">
    </form>

    <br><br>
    <div id="textoAdicional" style="display: none;">
        <label for="queEnfermedades">¿Que enfermedades?:</label>
        <textarea name="enfermedades" id="enfermedades" rows="4" cols="50"></textarea>
        <input type="submit" value="Enviar">
    </div>
    <br><br>
   
</form>
<script>


    </script>

</body>
</html>