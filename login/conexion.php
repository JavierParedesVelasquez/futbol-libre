<?php
$servidor = "localhost";
$basedatos = "bd_futbol";
$motor = "mysql";
$usuario ="root";
$password ="";
$cadena ="$motor:host=$servidor;dbname=$basedatos";
$cnx =new PDO($cadena, $usuario, $password);
?>
