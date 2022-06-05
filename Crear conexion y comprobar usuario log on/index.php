<?php
session_start();
error_reporting(0);
$varsesion = $_SESSION['User'];

if($varsesion == null || $varsesion = ''){
    echo 'Usted no tiene acceso a esta pagina';
    die();
}

include("conexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solo lectura de codigo</title>
</head>
<body>
<p>Only read code</p>
</body>
</html>