<?php

error_reporting(1);

include "../conexion2.php";

$id=$_REQUEST['user_id'];

$txtnombre = $_POST['txtnombre'];
$txtusuario = $_POST['txtusuario'];
$txtclave = md5($_POST['txtclave']);


$sql="UPDATE usuarios SET 
nombre_user='$txtnombre', 
usuario_user='$txtusuario',
pass_user='$txtclave'
   WHERE id_user=$id";

$resultado = $conexion->query($sql);

if($resultado){
    header('Location: ../../user.php');
}else{
    echo "No se edito el datos";
}
?>