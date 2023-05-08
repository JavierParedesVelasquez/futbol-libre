<?php

error_reporting(1);

include "../conexion2.php";

$id = $_REQUEST['home_id'];

$txtsummerPagina1 = $_POST['txtsummerPagina1'];
$txtsummerPagina2 = $_POST['txtsummerPagina2'];
$txttituseo_pagina = $_POST['txttituseo_pagina'];
$txtdescripcionseo_pagina = $_POST['txtdescripcionseo_pagina'];
$txtpalabrasclaveseo_pagina = $_POST['txtpalabrasclaveseo_pagina'];
$txtlogo = addslashes(file_get_contents($_FILES['txtlogo']['tmp_name']));

if (!empty($txtlogo)) {

    $sql = "UPDATE home SET 
summer1_home='$txtsummerPagina1', 
summer2_home='$txtsummerPagina2',
tituloseo_home='$txttituseo_pagina',
descripcionseo_home='$txtdescripcionseo_pagina',
palabrasclaveseo_home='$txtpalabrasclaveseo_pagina',
logo='$txtlogo'
 WHERE id_home=$id";

    $resultado = $conexion->query($sql);

    if ($resultado) {
        header('Location: ../../pagina.php');
    } else {
        echo "No se edito el datos";
    }
} else {
    $sql = "UPDATE home SET 
summer1_home='$txtsummerPagina1', 
summer2_home='$txtsummerPagina2',
tituloseo_home='$txttituseo_pagina',
descripcionseo_home='$txtdescripcionseo_pagina',
palabrasclaveseo_home='$txtpalabrasclaveseo_pagina'
 WHERE id_home=$id";

    $resultado = $conexion->query($sql);

    if ($resultado) {
        header('Location: ../../pagina.php');
    } else {
        echo "No se edito el datos";
    }
}
