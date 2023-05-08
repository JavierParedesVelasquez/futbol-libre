<?php

error_reporting(1);

include "../conexion2.php";
$id=$_REQUEST['equipos_id'];

$txtnombre = $_POST['txtnombre'];
$txtimagen = addslashes(file_get_contents($_FILES['txtimagen']['tmp_name']));


if(!empty($txtimagen)){
    
	$sql="UPDATE equipos SET 
    nombre_equipos='$txtnombre', 
    images_equipos='$txtimagen'
   WHERE id_equipos=$id";

	$resultado = $conexion->query($sql);

	if($resultado == true){

	header("Location: ../../equipos.php");

	} else {

	echo "No se editó el dato";
}
}else {

	$sql = "UPDATE equipos SET nombre_equipos='$txtnombre'
	WHERE id_equipos=$id";

	$resultado = $conexion->query($sql);

	if($resultado == true){

	header("Location: ../../equipos.php");

	} else {

	echo "No se editó el dato";

}
}

?>







?>