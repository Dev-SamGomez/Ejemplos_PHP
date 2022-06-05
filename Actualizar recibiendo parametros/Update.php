<?php
include("conexion.php");

$ODT = $_POST["ODT"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$telefono = $_POST["telefono"];
$email = $_POST["email"];
$direccion = $_POST["direccion"];
$servicio = $_POST["servicio"];
$solicitud = $_POST["solicitud"];
$clase_servicio = $_POST["clase_servicio"];
$costo_servicio = $_POST["costo_servicio"];
$fecha_visita = $_POST["fecha_visita"];
$notas = $_POST["notas"];
$modifica = $_POST["modifica"];

$actualizar = "UPDATE Cliente SET Nombre= '$nombre', Apellido= '$apellido', Telefono= '$telefono', Email= '$email', Direccion= '$direccion', Servicio= '$servicio', Solicitud= '$solicitud', Clase_servicio= '$clase_servicio', Costo_servicio= '$costo_servicio', Fecha_visita= '$fecha_visita', 
Notas= '$notas', FechaModif= SYSDATE(), Usuario_modifica= '$modifica' WHERE ODT= '$ODT'";

$resultado_actualizar = mysqli_query($conexion, $actualizar);

if ($resultado_actualizar) {
    echo "<script>
    alert('Se ha guardado la ODT');
    window.location='update-odt.php';
    </script>";
}

else {
    echo '<script>
    alert("No actualizado, verifiquelo con el departamento de sistemas");
    </script>';
}

mysqli_close($conexion);