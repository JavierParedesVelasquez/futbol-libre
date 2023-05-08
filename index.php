<?php
include 'conexion2.php';

$canales = "SELECT * FROM tbl_envivo INNER JOIN equipos ON tbl_envivo.id_equipos=equipos.id_equipos";
$conCanales = $conexion->query($canales);
?>
<!doctype html>
<html lang="en">

<head>
    <?php
    $sql = "SELECT * FROM home";
    $result6 = mysqli_query($conexion, $sql);
    while ($mostrar6 = mysqli_fetch_array($result6)) {
    ?>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="audience" content="all">
        <meta name="robots" content="index, all, follow">
        <meta name="author" content="Carlos Santa Cruz Olivera">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/images/logo_soccer.png">
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <title><?php echo $mostrar6['tituloseo_home'] ?></title>
        <meta name="description" content="<?php echo $mostrar6['descripcionseo_home'] ?>">
        <meta name="keywords" content="<?php echo $mostrar6['palabrasclaveseo_home'] ?>">
        <link rel="stylesheet" href="assets/css/main.css">
        <!-- Fuente -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <?php
    }
    ?>
</head>

<body class="body">
    <header class="header">
        <div class="container-fluid">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6 col-6">
                    <h1 class="fw-bold">F&uacute;tbol Libre</h1>
                </div>
                <div class="col-lg-6 col-6 d-flex justify-content-end ps-5">
                    <?php
                    $sql = "SELECT * FROM home";
                    $result7 = mysqli_query($conexion, $sql);
                    while ($mostrar7 = mysqli_fetch_array($result7)) {
                    ?>
                        <a href="index2.php">
                            <img src="data:image/jpg;base64,<?php echo base64_encode($mostrar7['logo']) ?>" alt="" class="logo_nav">
                        </a>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </header>
    <section class="summer1 mt-lg-5 mb-lg-5">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-lg-10 col-12">
                    <?php
                    $sql = "SELECT * FROM home";
                    $result1 = mysqli_query($conexion, $sql);
                    while ($mostrar1 = mysqli_fetch_array($result1)) {
                    ?>
                        <?php echo $mostrar1['summer1_home'] ?>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <section class="accordion mb-lg-5 mb-5">

        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-lg-10 col-12">
                    <?php
                    $sql = "SELECT * FROM tbl_tituloenvivo";
                    $result2 = mysqli_query($conexion, $sql);
                    while ($mostrar2 = mysqli_fetch_array($result2)) {
                    ?>
                        <div class="d-flex align-items-center justify-content-center py-3 title_agenda">
                            <span class="text-white"><?php echo $mostrar2['title_tituloenvivo'] ?></span>
                        </div>
                    <?php
                    }
                    ?>

                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <?php
                        while ($mostrar3 = $conCanales->fetch_assoc()) {
                        ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne-<?php echo $mostrar3['id_envivo'] ?>">
                                    <button class="accordion-button collapsed gap-3" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne-<?php echo $mostrar3['id_envivo'] ?>" aria-expanded="false" aria-controls="flush-collapseOne">
                                        <?php echo $mostrar3['hora_envivo'] ?>
                                        <img style="width:30px; height:20px" src="data:image/jpg;base64,<?php echo base64_encode($mostrar3['images_equipos']) ?>" alt="">
                                        <?php echo $mostrar3['equipo1'] ?>
                                        VS
                                        <?php echo $mostrar3['equipo2'] ?>
                                    </button>
                                </h2>
                                <div id="flush-collapseOne-<?php echo $mostrar3['id_envivo'] ?>" class="accordion-collapse collapse" aria-labelledby="flush-headingOne-<?php echo $mostrar3['id_envivo'] ?>" data-bs-parent="#accordionFlushExample">
                                    <div style="height: auto;" class="accordion-body d-grid gap-3 ">
                                        <?php if ($mostrar3['nombre1']) : ?>
                                            <a href="en-vivo/<?php echo $mostrar3['id_envivo'] ?>" target="_blank">
                                                <?php echo $mostrar3['nombre1'] ?>
                                            </a>
                                        <?php else : ?>

                                        <?php endif; ?>
                                        <!--  -->
                                        <?php if ($mostrar3['enlace1']) : ?>
                                            <a href="<?php echo $mostrar3['enlace1'] ?>" target="_blank">
                                                <?php echo $mostrar3['nombre9'] ?>
                                            </a>
                                        <?php else : ?>

                                        <?php endif; ?>
                                        <!--  -->
                                        <?php if ($mostrar3['nombre2']) : ?>
                                            <a  href="en-vivo-2/<?php echo $mostrar3['id_envivo'] ?>" target="_blank">
                                                <?php echo $mostrar3['nombre2'] ?>
                                            </a>
                                        <?php else : ?>

                                        <?php endif; ?>
                                        <!--  -->
                                        <?php if ($mostrar3['enlace2']) : ?>
                                            <a  href="<?php echo $mostrar3['enlace2'] ?>" target="_blank">
                                                <?php echo $mostrar3['nombre10'] ?>
                                            </a>
                                        <?php else : ?>

                                        <?php endif; ?>
                                        <!--  -->
                                        <?php if ($mostrar3['nombre3']) : ?>
                                            <a  href="en-vivo-3/<?php echo $mostrar3['id_envivo'] ?>" target="_blank">
                                                <?php echo $mostrar3['nombre3'] ?>
                                            </a>
                                        <?php else : ?>

                                        <?php endif; ?>
                                        <!--  -->
                                        <?php if ($mostrar3['enlace3']) : ?>
                                            <a  href="<?php echo $mostrar3['enlace3'] ?>" target="_blank">
                                                <?php echo $mostrar3['nombre11'] ?>
                                            </a>
                                        <?php else : ?>

                                        <?php endif; ?>
                                        <!--  -->
                                        <?php if ($mostrar3['nombre4']) : ?>
                                            <a  href="en-vivo-4/<?php echo $mostrar3['id_envivo'] ?>" target="_blank">
                                                <?php echo $mostrar3['nombre4'] ?>
                                            </a>
                                        <?php else : ?>

                                        <?php endif; ?>
                                        <!--  -->
                                        <?php if ($mostrar3['enlace4']) : ?>
                                            <a  href="<?php echo $mostrar3['enlace4'] ?>" target="_blank">
                                                <?php echo $mostrar3['nombre12'] ?>
                                            </a>
                                        <?php else : ?>

                                        <?php endif; ?>
                                        <!--  -->
                                        <?php if ($mostrar3['nombre5']) : ?>
                                            <a  href="en-vivo-5/<?php echo $mostrar3['id_envivo'] ?>" target="_blank">
                                                <?php echo $mostrar3['nombre5'] ?>
                                            </a>
                                        <?php else : ?>

                                        <?php endif; ?>
                                        <!--  -->
                                        <?php if ($mostrar3['enlace5']) : ?>
                                            <a  href="<?php echo $mostrar3['enlace5'] ?>" target="_blank">
                                                <?php echo $mostrar3['nombre13'] ?>
                                            </a>
                                        <?php else : ?>

                                        <?php endif; ?>
                                        <!--  -->
                                        <?php if ($mostrar3['nombre6']) : ?>
                                            <a  href="en-vivo-6/<?php echo $mostrar3['id_envivo'] ?>" target="_blank">
                                                <?php echo $mostrar3['nombre6'] ?>
                                            </a>
                                        <?php else : ?>

                                        <?php endif; ?>
                                        <!--  -->
                                        <?php if ($mostrar3['enlace6']) : ?>
                                            <a  href="<?php echo $mostrar3['enlace6'] ?>" target="_blank">
                                                <?php echo $mostrar3['nombre14'] ?>
                                            </a>
                                        <?php else : ?>

                                        <?php endif; ?>
                                        <!--  -->
                                        <?php if ($mostrar3['nombre7']) : ?>
                                            <a  href="en-vivo-7/<?php echo $mostrar3['id_envivo'] ?>" target="_blank">
                                                <?php echo $mostrar3['nombre7'] ?>
                                            </a>
                                        <?php else : ?>

                                        <?php endif; ?>
                                        <!--  -->
                                        <?php if ($mostrar3['enlace7']) : ?>
                                            <a  href="<?php echo $mostrar3['enlace7'] ?>" target="_blank">
                                                <?php echo $mostrar3['nombre15'] ?>
                                            </a>
                                        <?php else : ?>

                                        <?php endif; ?>
                                        <!--  -->
                                        <?php if ($mostrar3['nombre8']) : ?>
                                            <a  href="en-vivo-8/<?php echo $mostrar3['id_envivo'] ?>" target="_blank">
                                                <?php echo $mostrar3['nombre8'] ?>
                                            </a>
                                        <?php else : ?>

                                        <?php endif; ?>
                                        <!--  -->
                                        <?php if ($mostrar3['enlace8']) : ?>
                                            <a  href="<?php echo $mostrar3['enlace8'] ?>" target="_blank">
                                                <?php echo $mostrar3['nombre16'] ?>
                                            </a>
                                        <?php else : ?>

                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="canales">
        <h2 class="text-center mb-5">Ver Canales de f&uacute;tbol online en vivo y en directo.</h2>
        <span><?php include('vistas.php'); ?></span>
        <div class="container">
            <div class="row">
                <?php
                $sql = "SELECT * from tbl_canal";
                $result4 = mysqli_query($conexion, $sql);
                while ($mostrar4 = mysqli_fetch_array($result4)) {
                ?>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-5">
                        <div class="card">
                            <img src="data:image/jpg;base64,<?php echo base64_encode($mostrar4['imagen_canal']) ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center"><?php echo $mostrar4['titulo_canal'] ?></h5>
                                <p class="card-text"><?php echo $mostrar4['descripcion_canal'] ?></p>
                                <a class="btn btn-primary w-100" href="canal/<?php echo $mostrar4['id_canal'] ?>/<?php echo $mostrar4['slug'] ?>" target="_blank">
                                    Ver Canal
                                </a>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>
    <section class="summer2">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-lg-10 col-12 mb-lg-4">
                    <?php
                    $sql = "SELECT * FROM home";
                    $result5 = mysqli_query($conexion, $sql);
                    while ($mostrar5 = mysqli_fetch_array($result5)) {
                    ?>
                        <?php echo $mostrar5['summer2_home'] ?>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 p-lg-5 p-4">
                    <span class="fw-bold">SOBRE NOSOTROS</span>
                    <p>Fútbol Libre es el portal donde podra disfrutar online en vivo y en directos de los partidos en las mejores definiciones de alta calidad.</p>
                </div>
                <div class="col-lg-6 p-lg-5 p-4">
                    <span class="fw-bold">SIGUENOS</span>
                    <div class="d-flex align-items-center gap-5 mt-lg-3 social_footer">
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-instagram"></a>
                        <a href="#" class="fa fa-twitter"></a>
                        <a href="#" class="fa fa-youtube"></a>
                    </div>
                </div>
                <div class="col-lg-12 copy_footer py-lg-2 d-flex align-items-center justify-content-center">
                    <small class="text-white">Copyright © 2022 Todos los derechos reservados por <b> F&uacute;tbol Libre </b></small>
                </div>
            </div>

        </div>
    </footer>














    <script src="https://kit.fontawesome.com/34cd624114.js" crossorigin="anonymous"></script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>