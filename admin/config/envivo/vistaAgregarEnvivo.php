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
                <form action="agregarAgenda.php" method="POST" enctype="multipart/form-data" autocomplete="off">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel1">
                                <div class="panel-heading d-flex pb-3">
                                    <i class="fa-solid fa-file-contract me-2"></i>
                                    <h3>Agregar Agenda deportiva</h3>
                                </div>
                                <div class="mb-3 d-flex align-items-center div_agenda_1">
                                    <label for="txthora" class="form-label">Hora:</label>
                                    <input type="text" class="form-control" name="txthora" placeholder="Ingresar Hora:  00:00 am/pm" required>
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
                                    <input type="text" name="txtequipo1" class="form-control" placeholder="Ingresar nombre de equipo" required>
                                    <span clas="text-red">VS</span>
                                    <label for="txtequipo2" class="form-label">Equipo:</label>
                                    <input type="text" name="txtequipo2" class="form-control" placeholder="Ingresar nombre de equipo" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h2>IFRAME</h2>
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
                                                <input type="text" id="txtnombre1" name="txtnombre1" class="form-control" placeholder="Ingresar nombre de Canal de Transmision">
                                            </div>
                                            <div class="panel-body">
                                                <div class="mb-3">
                                                    <label for="txtiframe1" class="form-label">Codigo Iframe:</label>
                                                    <input type="text" id="txtiframe1" name="txtiframe1" class="form-control" placeholder="Ingresar Iframe">
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
                                                <input type="text" id="txtnombre2" name="txtnombre2" class="form-control" placeholder="Ingresar nombre de Canal de Transmision">
                                            </div>
                                            <div class="panel-body">
                                                <div class="mb-3">
                                                    <label for="txtiframe" class="form-label">Codigo Iframe:</label>
                                                    <input type="text" id="txtiframe2" name="txtiframe2" class="form-control" placeholder="Ingresar Iframe">
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
                                                <input type="text" id="txtnombre3" name="txtnombre3" class="form-control" placeholder="Ingresar nombre de Canal de Transmision">
                                            </div>
                                            <div class="panel-body">
                                                <div class="mb-3">
                                                    <label for="txtiframe" class="form-label">Codigo Iframe:</label>
                                                    <input type="text" id="txtiframe3" name="txtiframe3" class="form-control" placeholder="Ingresar Iframe">
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
                                                <input type="text" id="txtnombre4" name="txtnombre4" class="form-control" placeholder="Ingresar nombre de Canal de Transmision">
                                            </div>
                                            <div class="panel-body">
                                                <div class="mb-3">
                                                    <label for="txtiframe" class="form-label">Codigo Iframe:</label>
                                                    <input type="text" id="txtiframe4" name="txtiframe4" class="form-control" placeholder="Ingresar Iframe">
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
                                                <input type="text" id="txtnombre5" name="txtnombre5" class="form-control" placeholder="Ingresar nombre de Canal de Transmision">
                                            </div>
                                            <div class="panel-body">
                                                <div class="mb-3">
                                                    <label for="txtiframe" class="form-label">Codigo Iframe:</label>
                                                    <input type="text" id="txtiframe5" name="txtiframe5" class="form-control" placeholder="Ingresar Iframe">
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
                                                <input type="text" id="txtnombre6" name="txtnombre6" class="form-control" placeholder="Ingresar nombre de Canal de Transmision">
                                            </div>
                                            <div class="panel-body">
                                                <div class="mb-3">
                                                    <label for="txtiframe" class="form-label">Codigo Iframe:</label>
                                                    <input type="text" id="txtiframe6" name="txtiframe6" class="form-control" placeholder="Ingresar Iframe">
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
                                                <input type="text" id="txtnombre7" name="txtnombre7" class="form-control" placeholder="Ingresar nombre de Canal de Transmision">
                                            </div>
                                            <div class="panel-body">
                                                <div class="mb-3">
                                                    <label for="txtiframe" class="form-label">Codigo Iframe:</label>
                                                    <input type="text" id="txtiframe7" name="txtiframe7" class="form-control" placeholder="Ingresar Iframe">
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
                                                <input type="text" id="txtnombre8" name="txtnombre8" class="form-control" placeholder="Ingresar nombre de Canal de Transmision">
                                            </div>
                                            <div class="panel-body">
                                                <div class="mb-3">
                                                    <label for="txtiframe" class="form-label">Codigo Iframe:</label>
                                                    <input type="text" id="txtiframe8" name="txtiframe8" class="form-control" placeholder="Ingresar Iframe">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="col-md-6">
                            <h2>ENLACES</h2>
                            <p>
                                <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample11" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    1
                                </a>
                                <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample12" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    2
                                </a>
                                <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample13" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    3
                                </a>
                                <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample14" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    4
                                </a>
                                <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample15" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    5
                                </a>
                                <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample16" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    6
                                </a>
                                <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample17" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    7
                                </a>
                                <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample18" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    8
                                </a>
                            </p>
                            <div class="collapse" id="collapseExample11">
                                <span class="btn btn-info mb-2 text-white">1</span>
                                <div class="card card-body">
                                    <div class="col-md-12">
                                        <div class="panel2 d-flex justify-content-around align-items-center">
                                            <div class="mb-3">
                                                <label for="txtnomcanal1" class="form-label">Nombre del Canal:</label>
                                                <input type="text" id="txtnombre9" name="txtnombre9" class="form-control" placeholder="Ingresar nombre de Canal de Transmision">
                                            </div>
                                            <div class="panel-body">
                                                <div class="mb-3">
                                                    <label for="txtenlace1" class="form-label">Enlace:</label>
                                                    <input type="text" id="txtenlace1" name="txtenlace1" class="form-control" placeholder="Ingresar Enlace">
                                                    </textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="collapse" id="collapseExample12">
                                <span class="btn btn-info mb-2 text-white">2</span>
                                <div class="card card-body">
                                    <div class="col-md-12">
                                        <div class="panel2 d-flex justify-content-around align-items-center">
                                            <div class="mb-3">
                                                <label for="txtnomcanal" class="form-label">Nombre del Canal:</label>
                                                <input type="text" id="txtnombre10" name="txtnombre10" class="form-control" placeholder="Ingresar nombre de Canal de Transmision">
                                            </div>
                                            <div class="panel-body">
                                                <div class="mb-3">
                                                    <label for="txtenlace" class="form-label">Enlace:</label>
                                                    <input type="text" id="txtenlace2" name="txtenlace2" class="form-control" placeholder="Ingresar Enlace">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="collapse" id="collapseExample13">
                                <span class="btn btn-info mb-2 text-white">3</span>
                                <div class="card card-body">
                                    <div class="col-md-12">
                                        <div class="panel2 d-flex justify-content-around align-items-center">
                                            <div class="mb-3">
                                                <label for="txtnomcanal" class="form-label">Nombre del Canal:</label>
                                                <input type="text" id="txtnombre11" name="txtnombre11" class="form-control" placeholder="Ingresar nombre de Canal de Transmision">
                                            </div>
                                            <div class="panel-body">
                                                <div class="mb-3">
                                                    <label for="txtenlace" class="form-label">Enlace:</label>
                                                    <input type="text" id="txtenlace3" name="txtenlace3" class="form-control" placeholder="Ingresar Enlace">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="collapse" id="collapseExample14">
                                <span class="btn btn-info mb-2 text-white">4</span>
                                <div class="card card-body">
                                    <div class="col-md-12">
                                        <div class="panel2 d-flex justify-content-around align-items-center">
                                            <div class="mb-3">
                                                <label for="txtnomcanal" class="form-label">Nombre del Canal:</label>
                                                <input type="text" id="txtnombre12" name="txtnombre12" class="form-control" placeholder="Ingresar nombre de Canal de Transmision">
                                            </div>
                                            <div class="panel-body">
                                                <div class="mb-3">
                                                    <label for="txtenlace" class="form-label">Enlace:</label>
                                                    <input type="text" id="txtenlace4" name="txtenlace4" class="form-control" placeholder="Ingresar Enlace">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="collapse" id="collapseExample15">
                                <span class="btn btn-info mb-2 text-white">5</span>
                                <div class="card card-body">
                                    <div class="col-md-12">
                                        <div class="panel2 d-flex justify-content-around align-items-center">
                                            <div class="mb-3">
                                                <label for="txtnomcanal" class="form-label">Nombre del Canal:</label>
                                                <input type="text" id="txtnombre13" name="txtnombre13" class="form-control" placeholder="Ingresar nombre de Canal de Transmision">
                                            </div>
                                            <div class="panel-body">
                                                <div class="mb-3">
                                                    <label for="txtenlace" class="form-label">Enlace:</label>
                                                    <input type="text" id="txtenlace5" name="txtenlace5" class="form-control" placeholder="Ingresar Enlace">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="collapse" id="collapseExample16">
                                <span class="btn btn-info mb-2 text-white">6</span>
                                <div class="card card-body">
                                    <div class="col-md-12">
                                        <div class="panel2 d-flex justify-content-around align-items-center">
                                            <div class="mb-3">
                                                <label for="txtnomcanal" class="form-label">Nombre del Canal:</label>
                                                <input type="text" id="txtnombre14" name="txtnombre14" class="form-control" placeholder="Ingresar nombre de Canal de Transmision">
                                            </div>
                                            <div class="panel-body">
                                                <div class="mb-3">
                                                    <label for="txtenlace" class="form-label">Enlace:</label>
                                                    <input type="text" id="txtenlace6" name="txtenlace6" class="form-control" placeholder="Ingresar Enlace">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="collapse" id="collapseExample17">
                                <span class="btn btn-info mb-2 text-white">7</span>
                                <div class="card card-body">
                                    <div class="col-md-12">
                                        <div class="panel2 d-flex justify-content-around align-items-center">
                                            <div class="mb-3">
                                                <label for="txtnomcanal" class="form-label">Nombre del Canal:</label>
                                                <input type="text" id="txtnombre15" name="txtnombre15" class="form-control" placeholder="Ingresar nombre de Canal de Transmision">
                                            </div>
                                            <div class="panel-body">
                                                <div class="mb-3">
                                                    <label for="txtenlace" class="form-label">Enlace:</label>
                                                    <input type="text" id="txtenlace7" name="txtenlace7" class="form-control" placeholder="Ingresar Enlace">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="collapse" id="collapseExample18">
                                <span class="btn btn-info mb-2 text-white">8</span>
                                <div class="card card-body">
                                    <div class="col-md-12">
                                        <div class="panel2 d-flex justify-content-around align-items-center">
                                            <div class="mb-3">
                                                <label for="txtnomcanal" class="form-label">Nombre del Canal:</label>
                                                <input type="text" id="txtnombre16" name="txtnombre16" class="form-control" placeholder="Ingresar nombre de Canal de Transmision">
                                            </div>
                                            <div class="panel-body">
                                                <div class="mb-3">
                                                    <label for="txtenlace" class="form-label">Enlace:</label>
                                                    <input type="text" id="txtenlace8" name="txtenlace8" class="form-control" placeholder="Ingresar Enlace">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mb-5">
                            <a href="../../envivo" class="btn btn-secondary btn-sm me-3"><i class="fa-solid fa-arrow-left-long"></i> Regresar</a>
                            <button type="submit" class="btn btn-primary btn-sm"><i class="fa-solid fa-floppy-disk"></i> Guardar Agenda</button>
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


</body>

</html>