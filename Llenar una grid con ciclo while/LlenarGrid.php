<?php
session_start();
error_reporting(0);
$varsesion = $_SESSION['User'];

if($varsesion == null || $varsesion = ''){
    echo 'Usted no tiene acceso a esta pagina';
    die();
}

include("conexion.php");
$Productos = "SELECT * FROM Productos ORDER BY ID;"

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
<div class= "container-tabla container-tabla--edit">
            <div class= "table-titulo table-titulo--edit">ODT'S</div>
            <div class= "table-columna">Id</div>
            <div class= "table-columna">Producto</div>
            <div class= "table-columna">Description</div>
            <div class= "table-columna">Cantidad</div>
            <div class= "table-columna">InTransit</div>
            <div class= "table-columna">Estado</div>
            <?php $resultado = mysqli_query($conexion, $Productos);

            while($row=mysqli_fetch_assoc($resultado)){

            ?>
            <div class= "table-fila"><?php echo $row["Id"];?></div>
            <div class= "table-fila"><?php echo $row["Producto"]?></div>
            <div class= "table-fila"><?php echo $row["Description"]?></div>
            <div class= "table-fila"><?php echo $row["Cantidad"]?></div>
            <div class= "table-fila"><?php echo $row["InTransit"]?></div>
            <div class= "table-fila"><?php echo $row["Estado"]?></div>
            </div>
            <?php } mysqli_free_result($resultado);?>
        </div>
</body>
</html>