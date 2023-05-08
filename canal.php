<!doctype html>
<html lang="en">

<head>
    <?php
    include 'conexion2.php';
    $id = $_REQUEST['canal_id'];
    $sql = "SELECT * FROM tbl_canal WHERE id_canal =$id";
    $resultado = $conexion->query($sql);
    $fila = $resultado->fetch_assoc();
    ?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title><?php echo $fila['tituloseo_canal'] ?></title>
    <meta name="description" content="<?php echo $fila['descripcionseo_canal'] ?>">
    <meta name="keywords" content="<?php echo $fila['palabraclaveseo_canal'] ?>">
    <!-- Required meta tags -->
    <meta name="audience" content="all">
    <meta name="robots" content="index, all, follow">
    <meta name="author" content="Carlos Santa Cruz Olivera">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/logo_soccer.png">
    <link rel="stylesheet" href="../../assets/css/main.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
                    $result1 = mysqli_query($conexion, $sql);
                    while ($mostrar1 = mysqli_fetch_array($result1)) {
                    ?>
                        <a href="http://localhost/FutbolLibre5.0/">
                            <img src="data:image/jpg;base64,<?php echo base64_encode($mostrar1['logo']) ?>" alt="" class="logo_nav">
                        </a>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </header>
    <style>
        .summer1 #anuncio_1 img {
            width: 100% !important;
        }

        .summer1 #anuncio_2 img {
            width: 100% !important;
        }
        .summer1 #anuncio_2 div{
            background-size: cover !important;
        }
        .summer1 #anuncio_right .row img{
            width: 100% !important;
        }
        .summer1 #anuncio_right div{
            background-size: cover !important;
        }
    </style>
    <section class="summer1 mt-lg-5 mb-lg-5">
        <div class="container">
            <div class="row  justify-content-center ">
                <div class="col-lg-8 col-md-12 text-center">
                    <span class="border border-2 p-3 d-flex justify-content-center"><?php echo $fila['titulopost_canal'] ?></span>
                    <div id="anuncio_1" class="mt-lg-3 my-2">
                        <?php
                        $sql = "SELECT * FROM anuncio1";
                        $result2 = mysqli_query($conexion, $sql);
                        while ($mostrar2 = mysqli_fetch_array($result2)) {
                        ?>
                            <div class="">
                                <?php echo $mostrar2['codigo_anuncio1'] ?>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                    <div class="ratio ratio-16x9">
                        <?php echo $fila['iframe_canal'] ?>
                    </div>
                    <div id="anuncio_2" class=" mt-lg-3 my-2">
                        <?php
                        $sql = "SELECT * FROM anuncio2";
                        $result3 = mysqli_query($conexion, $sql);
                        while ($mostrar3 = mysqli_fetch_array($result3)) {
                        ?>
                            <?php echo $mostrar3['codigo_anuncio2'] ?>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <div  id="anuncio_right" class="col-lg-4 col-md-12">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 col-md-6 mb-3">
                            <?php
                            $sql = "SELECT * FROM anuncio3";
                            $result4 = mysqli_query($conexion, $sql);
                            while ($mostrar4 = mysqli_fetch_array($result4)) {
                            ?>
                                <?php echo $mostrar4['codigo_anuncio3'] ?>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="col-lg-12 col-md-6 ">
                            <?php
                            $sql = "SELECT * FROM anuncio4";
                            $result5 = mysqli_query($conexion, $sql);
                            while ($mostrar5 = mysqli_fetch_array($result5)) {
                            ?>
                                <?php echo $mostrar5['codigo_anuncio4'] ?>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-12 mt-lg-3 mt-md-3 mt-3">
                    <div class="container">
                        <div class="row justify-content-md-center">
                            <div class="col-lg-10 col-12 mt-lg-5">
                                <?php echo $fila['summer_canal'] ?>
                            </div>
                        </div>
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
                <div class="col-lg-12 copy_footer py-lg-2 py-mg-2 py-2 d-flex align-items-center justify-content-center">
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