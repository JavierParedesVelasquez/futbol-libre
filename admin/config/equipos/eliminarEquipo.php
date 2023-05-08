<?php
include "../conexion2.php";

$id = $_REQUEST['id_equipos'];

$sql = "DELETE  FROM equipos WHERE id_equipos = $id";

$resultado = $conexion->query($sql);

if($resultado){
    header("Location: ../../equipos.php");
}else{
    echo "No se elimino el dato";
}

?>