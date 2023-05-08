<?php
include '../login/conexion.php';
session_start();
if (!isset($_SESSION['id_user'])) header("location: ../login/login.php");
include 'config/conexion2.php';

$canales = "SELECT * FROM tbl_envivo INNER JOIN equipos ON tbl_envivo.id_equipos=equipos.id_equipos";
$conCanales = $conexion->query($canales);
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
                        <h2 class="text-start"><i class="fa-solid fa-pen"></i> Fecha - Agenda deportiva</h2>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-auto">
                            <!-- <a href="#" class="btn btn-primary btn-sm mt-5"><i class="fa-solid fa-circle-plus"></i> Agregar</a> -->
                        </div>
                    </div>
                    <table class="table table-sm table-striped table-hover mt-4">
                        <thead class="table-dark">
                            <tr>
                                <th>Fecha del Dia</th>
                                <th>Accion</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            include 'config/conexion2.php';
                            $sql = "SELECT * FROM tbl_tituloenvivo";
                            $resultado1 = $conexion->query($sql);
                            while ($fila1 = $resultado1->fetch_assoc()) { ?>
                                <tr>
                                    <td><?php echo $fila1['title_tituloenvivo'] ?></td>
                                    <td>
                                        <a href="config/envivo/vistaEditarFecha?id_tituloenvivo=<?php echo $fila1["id_tituloenvivo"] ?>" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i> Editar</a>
                                    </td>
                                </tr>
                        </tbody>
                    <?php
                            }
                    ?>
                    </table>
                </div>
                <div class="row justify-content-center align-content-center text-center">
                    <div class="columna col-lg-12 col-sm-auto">
                        <h2 class="text-start"><i class="fa-solid fa-book"></i> Agenda deportiva</h2>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-auto">
                            <a href="config/envivo/vistaAgregarEnvivo" class="btn btn-primary btn-sm mt-5"><i class="fa-solid fa-circle-plus"></i> Agregar</a>
                        </div>
                    </div>
                    <table class="table table-sm table-striped table-hover mt-4">
                        <thead class="table-dark">
                            <tr>
                                <th>Hora</th>
                                <th>Bandera</th>
                                <th>Equipo</th>
                                <th>VS</th>
                                <th>Equipo</th>
                                <th>Acci&oacute;n</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            while ($fila = $conCanales->fetch_assoc()) { ?>
                                <td><?php echo $fila['hora_envivo'] ?></td>
                                <td><img style="width:20px;" src="data:image/jpg;base64,<?php echo base64_encode($fila['images_equipos']) ?>" alt=""></td>
                                <td><?php echo $fila['equipo1'] ?></td>
                                <td></td>
                                <td><?php echo $fila['equipo2'] ?></td>

                                <td>
                                    <a href="config/envivo/vistaEditarEnvivo?id_envivo=<?php echo $fila["id_envivo"] ?>" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i> Editar</a>
                                    <a href="config/envivo/eliminarEnvivo?id_envivo=<?php echo $fila["id_envivo"] ?>" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i> Eliminar</a>
                                </td>

                        </tbody>
                    <?php
                            }
                    ?>
                    </table>
                    <?php
                    $sql = "SELECT * FROM equipos";
                    $conEquipo = $conexion->query($sql);
                    ?>

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