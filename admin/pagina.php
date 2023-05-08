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
                    <div class="columna col-lg-12 col-sm-auto">
                        <h2 class="text-start"><i class="fa-solid fa-book"></i> P&aacute;gina Principal</h2>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-auto">
                            <!-- <a href="config/envivo/vistaAgregarEnvivo.php" class="btn btn-primary btn-sm mt-5"><i class="fa-solid fa-circle-plus"></i> Agregar</a> -->
                        </div>
                    </div>
                    <table class="table table-sm table-striped table-hover mt-4">
                        <thead class="table-dark">
                            <tr>
                                <th>Summer1</th>
                                <th>Summer2</th>
                                <th>Acci&oacute;n</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            include 'config/conexion2.php';
                            $sql = "SELECT * FROM home";
                            $resultado = $conexion->query($sql);
                            while ($fila = $resultado->fetch_assoc()) { ?>
                                <tr>
                                    <td><?php echo $fila['summer1_home'] ?></td>
                                    <td><?php echo $fila['summer2_home'] ?></td>
                                    <td>
                                        <a href="config/pagina/vistaEditarPagina.php?id_home=<?php echo $fila["id_home"] ?>" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i> Editar</a>
                                    </td>
                                </tr>

                        </tbody>
                    <?php
                            }
                    ?>

                    </table>
                    <table class="table table-sm table-striped table-hover mt-4">
                        <thead class="table-dark">
                            <tr>
                                <th class="text-start ps-lg-5">Visitas que tiene la pagina</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
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