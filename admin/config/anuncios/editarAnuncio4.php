<?php

error_reporting(1);

include "../conexion2.php";
$id=$_REQUEST['anuncio_id4'];

$txtsrc =$_POST['txtsrc'];


    
	$sql = "UPDATE anuncio4 SET 
    codigo_anuncio4='$txtsrc'
	WHERE id_anuncio4=$id";

	$resultado = $conexion->query($sql);

	if($resultado == true){

	header("Location: ../../anuncios.php");

	} else {

	echo "No se editó el dato";}

?>