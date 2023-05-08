<?php

error_reporting(1);

include "../conexion2.php";

$id=$_REQUEST['envivo_id'];
$txtfecha =$_POST['txtfecha'];




$sql="UPDATE tbl_tituloenvivo SET 
title_tituloenvivo='$txtfecha'
   WHERE id_tituloenvivo=$id";

$resultado = $conexion->query($sql);

if($resultado){
    header('Location: ../../envivo');
}else{
    echo "No se edito el datos";
}
?>