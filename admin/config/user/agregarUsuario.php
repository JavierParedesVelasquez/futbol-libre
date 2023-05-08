<?php
include "../conexion.php";
$conn=conexion();

$txtnombre =$_POST['txtnombre'];
$txtusuario =$_POST['txtusuario'];
$txtclave =md5($_POST['txtclave']);




$sql = "INSERT INTO usuarios ( nombre_user, usuario_user, pass_user) 
VALUES ('$txtnombre','$txtusuario','$txtclave')";

$query=mysqli_query($conn,$sql);

if ($query){
    header('Location: ../../user.php');
}else{
    echo "No se insertaron los datos";
}

?>