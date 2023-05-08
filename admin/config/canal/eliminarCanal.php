<?php
include "../conexion2.php";

$id = $_REQUEST['id_canal'];

$sql = "DELETE  FROM tbl_canal WHERE id_canal = $id";

$resultado = $conexion->query($sql);

if($resultado){
    header('Location: ../../canal.php');
}else{
    echo "No se elimino el dato";
}

?>