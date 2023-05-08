<?php
session_start();
if (!isset($_SESSION['id_user'])) header("location: ../login/login.php");
include '../login/conexion.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include 'include/head.php' ?>
</head>

<body>

    <div class="container-fluid">
       <?php include 'include/barra1.php' ?>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="barra-lateral col-12 col-sm-auto">
                <?php include 'include/nav.php' ?>
            </div>
            <main class="main col">
                <div class="row justify-content-center align-content-center text-center">
                    <div class="columna col-lg-6">
                        <h1>WELCOME <hr> <?php echo $_SESSION['nombre_user'] ?></h1>
                        <div class="text-center">
                            <img src="assets/img/banner1.png" class="rounded img-fluid" alt="...">
                        </div>
                    </div>

                </div>

            </main>
        </div>
    </div>





    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>


    <script src="https://kit.fontawesome.com/34cd624114.js" crossorigin="anonymous"></script>
</body>

</html>