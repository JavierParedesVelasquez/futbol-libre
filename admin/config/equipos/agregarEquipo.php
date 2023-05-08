<?php
include "../conexion2.php";

$txtnombre =$_POST["txtnombre"];
$txtimagen = addslashes(file_get_contents($_FILES['txtimagen']['tmp_name']));


$sql = "INSERT INTO equipos (nombre_equipos, images_equipos) VALUES ('$txtnombre', '$txtimagen')";


$resultado = $conexion->query($sql);


if ($resultado){
    header('Location: ../../equipos.php');
}else{
    echo "No se insertaron los datos";
}




?>