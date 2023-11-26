<?php
session_start();
session_destroy();
header("Location: http://localhost/GotaSolidaria/html/index.html"); // Redirige al inicio de sesión después de cerrar la sesión
?>