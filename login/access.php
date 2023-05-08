<?php

require_once("conexion.php");

$u = $_POST['txtusuario'];
$p = md5($_POST['txtclave']);

$sql = "SELECT * FROM usuarios WHERE usuario_user='$u' AND pass_user='$p'";
$rs	= $cnx->query($sql) or die("error");
//roundCount CONTAR LOS REGISTROS
if ($rs->rowCount()==0) {
	# funcion de php header encabezado, location sirve para direccionar el navergador, para que se mueva a una pagina
	# te redigira a la pagina principal si esta incorrecto
	header("location: login.php");
}else{
	//INICIO DE SESION se inicia cuando los datos son correctos.
 	session_start();
 	// las variables de sesion son las que no se almacenan en la memoria del navegador sino se almacenan en la memoria del servidor y esas variables no se borran
 	$reg = $rs->fetchObject();
 	$_SESSION['id_user'] = $reg->id_user;
	 $_SESSION['nombre_user'] = $reg->nombre_user;
 	$_SESSION['usuario_user'] = $reg->usuario_user;
 	$_SESSION['pass_user'] = $reg->pass_user;
	header("location: ../admin/home");
}
?>	