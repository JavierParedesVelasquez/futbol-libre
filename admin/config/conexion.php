<?php

    function conexion(){
        $conexion=mysqli_connect('localhost', 'root', '', 'bd_futbol');
        return $conexion;
    }
?>