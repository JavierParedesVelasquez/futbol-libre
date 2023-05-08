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
                <div class="row justify-content-center align-content-center text-centers">
                    <div class="columna col-lg-10 col-sm-auto">
                        <h2 class="text-start"><i class="fa-sharp fa-solid fa-bullhorn"></i> Administrar Anuncios</h2>
                    </div>
                    <div class="table-responsive-md table-responsive mt-lg-3 mt-md-3 mt-3">
                        <table class="table table-hover table-sm">
                            <thead class="table-dark">
                                <tr>
                                    <th>Anuncio</th>
                                    <th class="d-flex justify-content-end">Acci&oacute;n</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                include 'config/conexion2.php';
                                $sql = "SELECT * FROM anuncio1";
                                $resultado = $conexion->query($sql);
                                while ($fila = $resultado->fetch_assoc()) { ?>
                                    <tr>
                                        <td><?php echo $fila['codigo_anuncio1'] ?></td>
                                        <td class="d-flex justify-content-end">
                                            <a href="config/anuncios/vistaEditarAnuncio.php?id_anuncio1=<?php echo $fila["id_anuncio1"] ?>" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i> Editar</a>
                                        </td>
                                    </tr>
                            </tbody>
                        <?php
                                }
                        ?>
                        </table>
                    </div>
                    <div class="table-responsive-md table-responsive">
                        <table class="table table-hover table-sm">
                            <thead class="table-dark">
                                <tr>
                                    <th>Anuncio 2</th>
                                    <th class="d-flex justify-content-end">Acci&oacute;n</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                include 'config/conexion2.php';
                                $sql = "SELECT * FROM anuncio2";
                                $resultado = $conexion->query($sql);
                                while ($fila = $resultado->fetch_assoc()) { ?>
                                    <tr>
                                        <td><?php echo $fila['codigo_anuncio2'] ?></td>
                                        <td class="d-flex justify-content-end">
                                            <a href="config/anuncios/vistaEditarAnuncio2.php?id_anuncio2=<?php echo $fila["id_anuncio2"] ?>" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i> Editar</a>
                                        </td>
                                    </tr>
                            </tbody>
                        <?php
                                }
                        ?>
                        </table>
                    </div>
                    <div class="table-responsive-md table-responsive">
                        <table class="table table-hover table-sm">
                            <thead class="table-dark">
                                <tr>
                                    <th>Anuncio 3</th>
                                    <th class="d-flex justify-content-end">Acci&oacute;n</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                include 'config/conexion2.php';
                                $sql = "SELECT * FROM anuncio3";
                                $resultado = $conexion->query($sql);
                                while ($fila = $resultado->fetch_assoc()) { ?>
                                    <tr>
                                        <td ><?php echo $fila['codigo_anuncio3'] ?></td>
                                        <td class="d-flex justify-content-end">
                                            <a href="config/anuncios/vistaEditarAnuncio3.php?id_anuncio3=<?php echo $fila["id_anuncio3"] ?>" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i> Editar</a>
                                        </td>
                                    </tr>
                            </tbody>
                        <?php
                                }
                        ?>
                        </table>
                    </div>
                    <div class="table-responsive-md table-responsive">
                        <table class="table table-hover table-sm">
                            <thead class="table-dark">
                                <tr>
                                    <th>Anuncio 4</th>
                                    <th class="d-flex justify-content-end">Acci&oacute;n</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                include 'config/conexion2.php';
                                $sql = "SELECT * FROM anuncio4";
                                $resultado = $conexion->query($sql);
                                while ($fila = $resultado->fetch_assoc()) { ?>
                                    <tr>
                                        <td ><?php echo $fila['codigo_anuncio4'] ?></td>
                                        <td class="d-flex justify-content-end">
                                            <a href="config/anuncios/vistaEditarAnuncio4.php?id_anuncio4=<?php echo $fila["id_anuncio4"] ?>" class="btn btn-warning btn-sm "><i class="fa-solid fa-pen-to-square"></i> Editar</a>
                                        </td>
                                    </tr>
                            </tbody>
                        <?php
                                }
                        ?>
                        </table>
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