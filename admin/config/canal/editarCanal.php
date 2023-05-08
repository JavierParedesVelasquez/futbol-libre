<?php

error_reporting(1);

include "../conexion2.php";
$id=$_REQUEST['canal_id'];

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

if(!empty($txtimagen)){
    
	$sql = "UPDATE tbl_canal SET 
    titulo_canal='$txttitulo',
	descripcion_canal='$txtparrafo',
    imagen_canal='$txtimagen',
    titulopost_canal='$txttitupostcanal',
    summer_canal='$txtsummerCanal',
    tituloseo_canal	='$txttituseo_canal',
    descripcionseo_canal='$txtdescripcionseo_canal',
    palabraclaveseo_canal='$txtpalabrasclaveseo_canal',
	iframe_canal='$txtiframe',
	slug='$txturlAmigable'
	WHERE id_canal=$id";

	$resultado = $conexion->query($sql);

	if($resultado == true){

	header("Location: ../../canal.php");

	} else {

	echo "No se editó el dato";}
}else {

	$sql = "UPDATE tbl_canal SET 
    titulo_canal='$txttitulo',
	descripcion_canal='$txtparrafo',
    titulopost_canal='$txttitupostcanal',
    summer_canal='$txtsummerCanal',
    tituloseo_canal	='$txttituseo_canal',
    descripcionseo_canal='$txtdescripcionseo_canal',
    palabraclaveseo_canal='$txtpalabrasclaveseo_canal',
	iframe_canal='$txtiframe',
	slug='$txturlAmigable'
	WHERE id_canal=$id";

	$resultado = $conexion->query($sql);

	if($resultado == true){

	header("Location: ../../canal.php");

	} else {

	echo "No se editó el dato";

}
}

?>