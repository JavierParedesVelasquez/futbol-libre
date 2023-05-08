<?php

error_reporting(1);

include "../conexion2.php";
$id=$_REQUEST['anuncio_id2'];

$txtsrc =$_POST['txtsrc'];


    
	$sql = "UPDATE anuncio2 SET 
    codigo_anuncio2='$txtsrc'
	WHERE id_anuncio2=$id";

	$resultado = $conexion->query($sql);

	if($resultado == true){

	header("Location: ../../anuncios.php");

	} else {

	echo "No se editó el dato";}

?>