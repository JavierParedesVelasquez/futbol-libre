<?php
include "../conexion.php";
$conn=conexion();

$txthora =$_POST['txthora'];
$txtequipos =$_POST['txtequipos'];
$txtequipo1 =$_POST['txtequipo1'];
$txtequipo2 =$_POST['txtequipo2'];

$txtnombre1 =$_POST['txtnombre1'];
$txtiframe1 =$_POST['txtiframe1'];

$txtnombre2 =$_POST['txtnombre2'];
$txtiframe2 =$_POST['txtiframe2'];

$txtnombre3 =$_POST['txtnombre3'];
$txtiframe3 =$_POST['txtiframe3'];

$txtnombre4 =$_POST['txtnombre4'];
$txtiframe4 =$_POST['txtiframe4'];

$txtnombre5 =$_POST['txtnombre5'];
$txtiframe5 =$_POST['txtiframe5'];

$txtnombre6 =$_POST['txtnombre6'];
$txtiframe6 =$_POST['txtiframe6'];

$txtnombre7 =$_POST['txtnombre7'];
$txtiframe7 =$_POST['txtiframe7'];

$txtnombre8 =$_POST['txtnombre8'];
$txtiframe8 =$_POST['txtiframe8'];

$txtnombre9 =$_POST['txtnombre9'];
$txtenlace1 =$_POST['txtenlace1'];

$txtnombre10 =$_POST['txtnombre10'];
$txtenlace2 =$_POST['txtenlace2'];

$txtnombre11 =$_POST['txtnombre11'];
$txtenlace3 =$_POST['txtenlace3'];

$txtnombre12 =$_POST['txtnombre12'];
$txtenlace4 =$_POST['txtenlace4'];

$txtnombre13 =$_POST['txtnombre13'];
$txtenlace5 =$_POST['txtenlace5'];

$txtnombre14 =$_POST['txtnombre14'];
$txtenlace6 =$_POST['txtenlace6'];

$txtnombre15 =$_POST['txtnombre15'];
$txtenlace7 =$_POST['txtenlace7'];

$txtnombre16 =$_POST['txtnombre16'];
$txtenlace8 =$_POST['txtenlace8'];





$sql = "INSERT INTO tbl_envivo 
(hora_envivo, id_equipos, equipo1, equipo2, 
nombre1, iframe1,
nombre2, iframe2,
nombre3, iframe3,
nombre4, iframe4,
nombre5, iframe5,
nombre6, iframe6,
nombre7, iframe7,
nombre8, iframe8,
nombre9, enlace1,
nombre10, enlace2,
nombre11, enlace3,
nombre12, enlace4,
nombre13, enlace5,
nombre14, enlace6,
nombre15, enlace7,
nombre16, enlace8
) 
VALUES 
('$txthora',$txtequipos,'$txtequipo1','$txtequipo2',
 '$txtnombre1','$txtiframe1',
 '$txtnombre2','$txtiframe2',
 '$txtnombre3','$txtiframe3',
 '$txtnombre4','$txtiframe4',
 '$txtnombre5','$txtiframe5',
 '$txtnombre6','$txtiframe6',
 '$txtnombre7','$txtiframe7',
 '$txtnombre8','$txtiframe8',
 '$txtnombre9','$txtenlace1',
 '$txtnombre10','$txtenlace2',
 '$txtnombre11','$txtenlace3',
 '$txtnombre12','$txtenlace4',
 '$txtnombre13','$txtenlace5',
 '$txtnombre14','$txtenlace6',
 '$txtnombre15','$txtenlace7',
 '$txtnombre16','$txtenlace8'

)";

$query=mysqli_query($conn,$sql);

if ($query){
    header('Location: ../../envivo');
}else{
    echo "No se insertaron los datos";
}

?>