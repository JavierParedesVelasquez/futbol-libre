<?php
include "../conexion.php";
$conn=conexion();

$txttitulo =$_POST['txttitulo'];
$txtparrafo =$_POST['txtparrafo'];
$txttitupostcanal =$_POST['txttitupostcanal'];
$txtsummerCanal =$_POST['txtsummerCanal'];
$txttituseo_canal =$_POST['txttituseo_canal'];
$txtdescripcionseo_canal =$_POST['txtdescripcionseo_canal'];
$txtpalabrasclaveseo_canal =$_POST['txtpalabrasclaveseo_canal'];
$txtimagen = addslashes(file_get_contents($_FILES['txtimagen']['tmp_name']));
$txtiframe =$_POST['txtiframe'];
$txturlAmigable =$_POST['urlAmigable'];



$sql = "INSERT INTO tbl_canal ( 
    titulo_canal, 
    descripcion_canal,
    titulopost_canal,
    summer_canal, 
    tituloseo_canal,
    descripcionseo_canal,
    palabraclaveseo_canal,
    imagen_canal, 
    iframe_canal, 
    slug) 
VALUES (
    '$txttitulo',
    '$txtparrafo',
    '$txttitupostcanal',
    '$txtsummerCanal',
    '$txttituseo_canal', 
    '$txtdescripcionseo_canal', 
    '$txtpalabrasclaveseo_canal',
    '$txtimagen',
    '$txtiframe',
    '$txturlAmigable')";

$query=mysqli_query($conn,$sql);

if ($query){
    header('Location: ../../canal.php');
}else{
    echo "No se insertaron los datos";
}

?>