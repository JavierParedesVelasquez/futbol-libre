<?php

error_reporting(1);

include "../conexion2.php";
$id=$_REQUEST['anuncio_id3'];

$txtsrc =$_POST['txtsrc'];


    
	$sql = "UPDATE anuncio3 SET 
    codigo_anuncio3='$txtsrc'
	WHERE id_anuncio3=$id";

	$resultado = $conexion->query($sql);

	if($resultado == true){

	header("Location: ../../anuncios.php");

	} else {

	echo "No se editó el dato";}

?>