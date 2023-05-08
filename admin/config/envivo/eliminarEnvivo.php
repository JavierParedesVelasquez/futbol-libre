<?php
include "../conexion2.php";

$id = $_REQUEST['id_envivo'];

$sql = "DELETE  FROM tbl_envivo WHERE id_envivo = $id";

$resultado = $conexion->query($sql);

if($resultado){
    header('Location: ../../envivo');
}else{
    echo "No se elimino el datos";
}

?>