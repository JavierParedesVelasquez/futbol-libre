<?php
include "../conexion2.php";

$id = $_REQUEST['id_user'];

$sql = "DELETE  FROM usuarios WHERE id_user = $id";

$resultado = $conexion->query($sql);

if($resultado){
    header('Location: ../../user.php');
}else{
    echo "No se elimino el dato";
}

?>