<?php
session_start();
if (!isset($_SESSION['id_user'])) header("location: ../../../login/login.php");
include '../../../login/conexion.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include '../../include/headconfig.php' ?>
</head>

<body>

    <div class="container-fluid">
        <?php include '../../include/barra1config.php' ?>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="barra-lateral col-12 col-sm-auto">
                <?php include '../../include/navconfig.php' ?>
            </div>
            <main class="main col">
                <?php
                include '../conexion2.php';
                $id = $_REQUEST['id_envivo'];
                $sql = "SELECT * FROM tbl_envivo WHERE id_envivo=$id";
                $resultado = $conexion->query($sql);
                $fila = $resultado->fetch_assoc();
                ?>
                <form action="editarEnvivo.php?envivo_id=<?php echo $fila['id_envivo'] ?>" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel1">
                                <div class="panel-heading d-flex pb-3">
                                    <i class="fa-solid fa-file-contract me-2"></i>
                                    <h3>Editar Agenda deportiva</h3>
                                </div>
                                <div class="mb-3 d-flex align-items-center div_agenda_1 flex-row-reverse bd-highlight me-5">
                                    <span class="text-danger me-5">Si desea editar seleccionar denuevo la liga</span>
                                </div>
                                <div class="mb-3 d-flex align-items-center div_agenda_1">
                                    <label for="txthora" class="form-label">Hora:</label>
                                    <input type="text" class="form-control" name="txthora" value="<?php echo $fila['hora_envivo'] ?>" placeholder="Ingresar Hora:  00:00 am/pm" required>
                                    <label for="txtequipos" class="form-label">Liga:</label>
                                    <select name="txtequipos" class="form-select">
                                        <?php
                                        include_once '../conexion.php';
                                        $conn = conexion();
                                        $sql = 'SELECT *FROM equipos';
                                        $query = mysqli_query($conn, $sql);
                                        while ($row = mysqli_fetch_array($query)) {
                                            $idequipo = $row['id_equipos'];
                                            $nomEquipo = $row['nombre_equipos'];
                                        ?>
                                            <option value="<?php echo $idequipo ?>"><?php echo $nomEquipo ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="mb-3 d-flex align-items-center div_agenda_2">
                                    <label for="txtequipo1" class="form-label">Equipo:</label>
                                    <input type="text" name="txtequipo1" class="form-control" value="<?php echo $fila['equipo1'] ?>" placeholder="Ingresar nombre de equipo" required>
                                    <span clas="text-red">VS</span>
                                    <label for="txtequipo2" class="form-label">Equipo:</label>
                                    <input type="text" name="txtequipo2" class="form-control" value="<?php echo $fila['equipo2'] ?>" placeholder="Ingresar nombre de equipo" required>
                                </div>
                            </div>
                        </div>
                        <p>
                            <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
                                1
                            </a>
                            <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
                                2
                            </a>
                            <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample">
                                3
                            </a>
                            <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample">
                                4
                            </a>
                            <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample5" role="button" aria-expanded="false" aria-controls="collapseExample">
                                5
                            </a>
                            <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample6" role="button" aria-expanded="false" aria-controls="collapseExample">
                                6
                            </a>
                            <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample7" role="button" aria-expanded="false" aria-controls="collapseExample">
                                7
                            </a>
                            <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample8" role="button" aria-expanded="false" aria-controls="collapseExample">
                                8
                            </a>
                        </p>
                        <div class="collapse" id="collapseExample1">
                            <span class="btn btn-info mb-2 text-white">1</span>
                            <div class="card card-body">
                                <div class="col-md-12">
                                    <div class="panel2 d-flex justify-content-around align-items-center">
                                        <div class="mb-3">
                                            <label for="txtnomcanal1" class="form-label">Nombre del Canal:</label>
                                            <input type="text" name="txtnomcanal1" class="form-control" value="<?php echo $fila['nombrecanal_envivo'] ?>" placeholder="Ingresar nombre de Canal de Transmision">
                                        </div>
                                        <div class="panel-body">
                                            <div class="mb-3">
                                                <label for="txtiframe1" class="form-label">Codigo Iframe:</label>
                                                <textarea rows="2" cols="30" name="txtiframe1" class="form-control" placeholder="Ingresar Iframe">
                                                    <?php echo $fila['iframe_envivo'] ?>
                                                </textarea>

                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <div class="mb-3">
                                                <label for="txtenlace1" class="form-label">Enlace:</label>
                                                <input type="text" name="txtenlace1" class="form-control" value="<?php echo $fila['enlace'] ?>" placeholder="Ingresar Enlace">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="collapse" id="collapseExample2">
                            <span class="btn btn-info mb-2 text-white">2</span>
                            <div class="card card-body">
                                <div class="col-md-12">
                                    <div class="panel2 d-flex justify-content-around align-items-center">
                                        <div class="mb-3">
                                            <label for="txtnomcanal" class="form-label">Nombre del Canal:</label>
                                            <input type="text" name="txtnomcanal2" class="form-control" value="<?php echo $fila['nombrecanal_envivo2'] ?>" placeholder="Ingresar nombre de Canal de Transmision">
                                        </div>
                                        <div class="panel-body">
                                            <div class="mb-3">
                                                <label for="txtiframe" class="form-label">Codigo Iframe:</label>
                                                <textarea rows="1" cols="30" name="txtiframe2" class="form-control" placeholder="Ingresar Iframe">
                                                    <?php echo $fila['iframe_envivo2'] ?>
                                                </textarea>
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <div class="mb-3">
                                                <label for="txtenlace" class="form-label">Enlace:</label>
                                                <input type="text" name="txtenlace2" class="form-control" value="<?php echo $fila['enlace2'] ?>" placeholder="Ingresar Enlace">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="collapse" id="collapseExample3">
                            <span class="btn btn-info mb-2 text-white">3</span>
                            <div class="card card-body">
                                <div class="col-md-12">
                                    <div class="panel2 d-flex justify-content-around align-items-center">
                                        <div class="mb-3">
                                            <label for="txtnomcanal" class="form-label">Nombre del Canal:</label>
                                            <input type="text" name="txtnomcanal3" class="form-control" value="<?php echo $fila['nombrecanal_envivo3'] ?>" placeholder="Ingresar nombre de Canal de Transmision">
                                        </div>
                                        <div class="panel-body">
                                            <div class="mb-3">
                                                <label for="txtiframe" class="form-label">Codigo Iframe:</label>
                                                <input rows="2" cols="30" name="txtiframe3" value="<?php echo $fila['iframe_envivo3'] ?>" class="form-control" placeholder="Ingresar Iframe">
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <div class="mb-3">
                                                <label for="txtenlace" class="form-label">Enlace:</label>
                                                <input rows="2" cols="30" name="txtenlace3" value="<?php echo $fila['enlace3'] ?>" class="form-control" placeholder="Ingresar Enlace">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="collapse" id="collapseExample4">
                            <span class="btn btn-info mb-2 text-white">4</span>
                            <div class="card card-body">
                                <div class="col-md-12">
                                    <div class="panel2 d-flex justify-content-around align-items-center">
                                        <div class="mb-3">
                                            <label for="txtnomcanal" class="form-label">Nombre del Canal:</label>
                                            <input type="text" name="txtnomcanal4" class="form-control" value="<?php echo $fila['nombrecanal_envivo4'] ?>" placeholder="Ingresar nombre de Canal de Transmision">
                                        </div>
                                        <div class="panel-body">
                                            <div class="mb-3">
                                                <label for="txtiframe" class="form-label">Codigo Iframe:</label>
                                                <input type="text" name="txtiframe4" class="form-control" value="<?php echo $fila['iframe_envivo4'] ?>" placeholder="Ingresar Iframe">
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <div class="mb-3">
                                                <label for="txtenlace" class="form-label">Enlace:</label>
                                                <input type="text" name="txtenlace4" class="form-control" value="<?php echo $fila['enlace4'] ?>" placeholder="Ingresar Enlace">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="collapse" id="collapseExample5">
                            <span class="btn btn-info mb-2 text-white">5</span>
                            <div class="card card-body">
                                <div class="col-md-12">
                                    <div class="panel2 d-flex justify-content-around align-items-center">
                                        <div class="mb-3">
                                            <label for="txtnomcanal" class="form-label">Nombre del Canal:</label>
                                            <input type="text" name="txtnomcanal5" class="form-control" value="<?php echo $fila['nombrecanal_envivo5'] ?>" placeholder="Ingresar nombre de Canal de Transmision">
                                        </div>
                                        <div class="panel-body">
                                            <div class="mb-3">
                                                <label for="txtiframe" class="form-label">Codigo Iframe:</label>
                                                <input type="text" name="txtiframe5" value="<?php echo $fila['iframe_envivo5'] ?>" class="form-control" placeholder="Ingresar Iframe">
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <div class="mb-3">
                                                <label for="txtenlace" class="form-label">Enlace:</label>
                                                <input type="text" name="txtenlace5" value="<?php echo $fila['enlace5'] ?>" class="form-control" placeholder="Ingresar Enlace">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="collapse" id="collapseExample6">
                            <span class="btn btn-info mb-2 text-white">6</span>
                            <div class="card card-body">
                                <div class="col-md-12">
                                    <div class="panel2 d-flex justify-content-around align-items-center">
                                        <div class="mb-3">
                                            <label for="txtnomcanal" class="form-label">Nombre del Canal:</label>
                                            <input type="text" name="txtnomcanal6" class="form-control" value="<?php echo $fila['nombrecanal_envivo6'] ?>" placeholder="Ingresar nombre de Canal de Transmision">
                                        </div>
                                        <div class="panel-body">
                                            <div class="mb-3">
                                                <label for="txtiframe" class="form-label">Codigo Iframe:</label>
                                                <input type="text" name="txtiframe6" value="<?php echo $fila['iframe_envivo6'] ?>" class="form-control" placeholder="Ingresar Iframe">
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <div class="mb-3">
                                                <label for="txtenlace" class="form-label">Enlace:</label>
                                                <input type="text" name="txtenlace6" value="<?php echo $fila['enlace6'] ?>" class="form-control" placeholder="Ingresar Enlace">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="collapse" id="collapseExample7">
                            <span class="btn btn-info mb-2 text-white">7</span>
                            <div class="card card-body">
                                <div class="col-md-12">
                                    <div class="panel2 d-flex justify-content-around align-items-center">
                                        <div class="mb-3">
                                            <label for="txtnomcanal" class="form-label">Nombre del Canal:</label>
                                            <input type="text" name="txtnomcanal7" class="form-control" value="<?php echo $fila['nombrecanal_envivo7'] ?>" placeholder="Ingresar nombre de Canal de Transmision">
                                        </div>
                                        <div class="panel-body">
                                            <div class="mb-3">
                                                <label for="txtiframe" class="form-label">Codigo Iframe:</label>
                                                <input type="text" name="txtiframe7" value="<?php echo $fila['iframe_envivo7'] ?>" class="form-control" placeholder="Ingresar Iframe">
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <div class="mb-3">
                                                <label for="txtenlace" class="form-label">Enlace:</label>
                                                <input type="text" name="txtenlace7" value="<?php echo $fila['enlace7'] ?>" class="form-control" placeholder="Ingresar Enlace">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="collapse" id="collapseExample8">
                            <span class="btn btn-info mb-2 text-white">8</span>
                            <div class="card card-body">
                                <div class="col-md-12">
                                    <div class="panel2 d-flex justify-content-around align-items-center">
                                        <div class="mb-3">
                                            <label for="txtnomcanal" class="form-label">Nombre del Canal:</label>
                                            <input type="text" name="txtnomcanal8" class="form-control" value="<?php echo $fila['nombrecanal_envivo8'] ?>" placeholder="Ingresar nombre de Canal de Transmision">
                                        </div>
                                        <div class="panel-body">
                                            <div class="mb-3">
                                                <label for="txtiframe" class="form-label">Codigo Iframe:</label>
                                                <textarea rows="2" cols="30" name="txtiframe8" class="form-control" placeholder="Ingresar Iframe">
                                                    <?php echo $fila['iframe_envivo8'] ?>
                                                </textarea>
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <div class="mb-3">
                                                <label for="txtenlace" class="form-label">Enlace:</label>
                                                <input type="text" name="txtenlace8" value="<?php echo $fila['enlace8'] ?>" class="form-control" placeholder="Ingresar Enlace">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mb-5">
                            <a href="../../envivo" class="btn btn-secondary btn-sm me-3"><i class="fa-solid fa-arrow-left-long"></i> Regresar</a>
                            <button type="submit" class="btn btn-primary btn-sm"><i class="fa-solid fa-floppy-disk"></i> Editar Agenda</button>
                        </div>
                    </div>

                </form>
            </main>
        </div>
    </div>




    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>


    <script src="https://kit.fontawesome.com/34cd624114.js" crossorigin="anonymous"></script>
    <!-- Slug -->
    <script type="text/javascript">
        function crearURLAmigable(slug) {

            // Reemplaza los carácteres especiales | simbolos con un espacio 
            slug = slug.replace(/[`~!@#$%^&*()_\-+=\[\]{};:'"\\|\/,.<>?\s]/g, ' ').toLowerCase();

            // Corta los espacios al inicio y al final del sluging 
            slug = slug.replace(/^\s+|\s+$/gm, '');

            // Reemplaza el espacio con guión  
            slug = slug.replace(/\s+/g, '-');

            // Creo la URL en el campo de texto 'url'
            var input = document.getElementById('urlAmigable');
            input.value = slug;

            // // Creo la URL en el elemento span 'texto-url' 
            // document.getElementById("texto-url").innerHTML = slug;

        }
    </script>
    <!-- Summernote JS - CDN Link -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script>
        $('#summerEnvivo').summernote({
            // placeholder: 'Hello user',
            tabsize: 2,
            height: 400
        });
    </script>
    <!-- //Summernote JS - CDN Link -->
</body>

</html>