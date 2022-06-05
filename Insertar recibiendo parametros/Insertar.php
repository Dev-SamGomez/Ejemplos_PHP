<?php

include ("conexion.php");

$nombre = $_POST["name"];
$apellido = $_POST["apellido"];
$email = $_POST["Email"];
$telefono = $_POST["Telefono"];
$services = $_POST["services"];
$solicitud = $_POST["Solicitud"];
$direccion = $_POST["Direccion"];
$fechacompromiso = $_POST["Fecha_compromiso"];

$insertar_contacto = "INSERT INTO tblContactos (Nombre, Apellido, Email, Telefono, Servicio, Solicitud, Fecha, Direccion, Fecha_visita, Status)
VALUES ('$nombre', '$apellido', '$email', '$telefono', '$services', '$solicitud', SYSDATE(), '$direccion', '$fechacompromiso', 'Open')";

$resultado_agregar_request = mysqli_query($conexion, $insertar_contacto);
if ($resultado_agregar_request) {
    echo "<script>
    alert('Registrado');
    window.location='insertar_datos_de_contacto.php';
    </script>";
}

else {
    echo '<script>
    alert("No registrado");
    </script>';
}

mysqli_close($conexion);