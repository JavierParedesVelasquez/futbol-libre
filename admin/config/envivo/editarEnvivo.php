<?php

error_reporting(1);

include "../conexion2.php";

$id=$_REQUEST['envivo_id'];

$txthora =$_POST['txthora'];
$txtequipos =$_POST['txtequipos'];
$txtequipo1 =$_POST['txtequipo1'];
$txtequipo2 =$_POST['txtequipo2'];

$txtnomcanal1 =$_POST['txtnomcanal1'];
$txtiframe1 =$_POST['txtiframe1'];
$txtenlace1 =$_POST['txtenlace1'];

$txtnomcanal2 =$_POST['txtnomcanal2'];
$txtiframe2 =$_POST['txtiframe2'];
$txtenlace2 =$_POST['txtenlace2'];

$txtnomcanal3 =$_POST['txtnomcanal3'];
$txtiframe3 =$_POST['txtiframe3'];
$txtenlace3 =$_POST['txtenlace3'];

$txtnomcanal4 =$_POST['txtnomcanal4'];
$txtiframe4 =$_POST['txtiframe4'];
$txtenlace4 =$_POST['txtenlace4'];

$txtnomcanal5 =$_POST['txtnomcanal5'];
$txtiframe5 =$_POST['txtiframe5'];
$txtenlace5 =$_POST['txtenlace5'];

$txtnomcanal6 =$_POST['txtnomcanal6'];
$txtiframe6 =$_POST['txtiframe6'];
$txtenlace6 =$_POST['txtenlace6'];

$txtnomcanal7 =$_POST['txtnomcanal7'];
$txtiframe7 =$_POST['txtiframe7'];
$txtenlace7 =$_POST['txtenlace7'];

$txtnomcanal8 =$_POST['txtnomcanal8'];
$txtiframe8 =$_POST['txtiframe8'];
$txtenlace8 =$_POST['txtenlace8'];

$sql="UPDATE tbl_envivo SET 
hora_envivo='$txthora', 
id_equipos=$txtequipos,
equipo1='$txtequipo1',
equipo2='$txtequipo2',

nombrecanal_envivo='$txtnomcanal1',
iframe_envivo='$txtiframe1', 
enlace='$txtenlace1',

nombrecanal_envivo2='$txtnomcanal2',
iframe_envivo2='$txtiframe2', 
enlace2='$txtenlace2',

nombrecanal_envivo3='$txtnomcanal3',
iframe_envivo3='$txtiframe3', 
enlace3='$txtenlace3',

nombrecanal_envivo4='$txtnomcanal4',
iframe_envivo4='$txtiframe4', 
enlace4='$txtenlace4',

nombrecanal_envivo5='$txtnomcanal5',
iframe_envivo5='$txtiframe5', 
enlace5='$txtenlace5',

nombrecanal_envivo6='$txtnomcanal6',
iframe_envivo6='$txtiframe6', 
enlace6='$txtenlace6',

nombrecanal_envivo7='$txtnomcanal7',
iframe_envivo7='$txtiframe7', 
enlace7='$txtenlace7',

nombrecanal_envivo8='$txtnomcanal8',
iframe_envivo8='$txtiframe8', 
enlace8='$txtenlace8'

   WHERE id_envivo=$id";

$resultado = $conexion->query($sql);

if($resultado){
    header('Location: ../../envivo');
}else{
    echo "No se edito el datos";
}
?>