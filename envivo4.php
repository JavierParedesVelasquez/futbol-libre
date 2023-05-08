<?php
include 'conexion2.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'conexion2.php';
    $id = $_REQUEST['envivo_id'];
    $sql = "SELECT * FROM tbl_envivo WHERE id_envivo=$id";
    $resultado = $conexion->query($sql);
    $fila = $resultado->fetch_assoc();
    ?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>Fútbol Libre</title>

    <meta name="audience" content="all">
    <meta name="robots" content="index, all, follow">
    <meta name="author" content="Carlos Santa Cruz Olivera">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/logo_soccer.png">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">

</head>

<body>
    <header class="header">
        <h1>F&uacute;tbol Libre</h1>
        <a href="./">
            <img src="../assets/images/logo_soccer.png" alt="">
        </a>
    </header>
    <section class="iframe_envivo">
        <div class="video-responsive">
            <?php echo $fila['iframe4'] ?>
        </div>
    </section>
    <section class="summer_envivo">
       
    </section>
    <footer class="pie-pagina">
        <div class="grupo-1">
            <!-- <div class="box">
                <figure>
                    <a href="#">
                        <img src="assets/images/logo_soccer.png" alt="Logo">
                    </a>
                </figure>
            </div> -->
            <div class="box">
                <h2>SOBRE NOSOTROS</h2>
                <p>Fútbol Libre es el portal donde podra disfrutar online en vivo y en directos de los partidos en las mejores definiciones de alta calidad.</p>
            </div>
            <div class="box">
                <h2>SIGUENOS</h2>
                <div class="red-social">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-youtube"></a>
                </div>
            </div>
        </div>
        <div class="grupo-2">
            <small>Copyright © 2022 Todos los derechos reservados por <b> F&uacute;tbol Libre </b></small>
        </div>
    </footer>

    <script src="https://kit.fontawesome.com/34cd624114.js" crossorigin="anonymous"></script>
</body>

</html>