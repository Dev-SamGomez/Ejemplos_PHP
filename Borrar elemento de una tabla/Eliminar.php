<?php
include ("conexion.php"); //Incluimos la conexion a la DB

$id = $_GET["id"]; //Recibimos el ID
$eliminar_contacto = "DELETE FROM tblcontactos WHERE ID= '$id'"; //Creamos la query de borrar

$resultado_eliminar_contacto = mysqli_query($conexion, $eliminar_contacto); //Guardamos la variable luego de ejecutar la query

if ($resultado_eliminar_contacto) {
    header("Location: Index_tabla.php"); //Si si se elimina, mantenemos en la pagina
}
else { //Si no, generamos un script desde php, el cual pasamos una alerta que no se pudo eliminar, y regresamos en el historial 1 pagina atras.
    echo "<script>
    alert('No se pudo eliminar');
    window.history.go(-1);
    </script>";
}
mysqli_close($conexion);
