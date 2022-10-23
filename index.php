<?php
session_start();// variable de sesion
if (!isset($_SESSION['nombre'])) {
	header('location: login.php');// tambien hace un direccionamiento hacia una pagina.
}else{
	$usuacrioactivo=$_SESSION['nombre'];
	$idusuario=$_SESSION['id'];
}

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Benjamín Joaquín Martínez</title>
    <link rel="stylesheet" href="main.css">
</head>

<body>



</body>

</html>