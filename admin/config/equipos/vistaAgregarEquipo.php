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
                <form action="agregarEquipo.php" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="panel1">
                                <div class="panel-heading d-flex pb-3">
                                    <i class="fa-solid fa-passport"></i>
                                    <h3>Agregar Liga:</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Nombre</label>
                                        <input type="text" class="form-control" id="txtnombre" name="txtnombre" placeholder="Ingresar nombre de la liga" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="panel1">
                                <div class="panel-heading d-flex pb-3">
                                    <h3>Logo:</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Imagen</label>
                                        <input type="file" class="form-control" id="txtimagen" name="txtimagen" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mb-5">
                            <a href="../../equipos.php" class="btn btn-secondary btn-sm me-3"><i class="fa-solid fa-arrow-left-long"></i> Regresar</a>
                            <button type="submit" class="btn btn-primary btn-sm"><i class="fa-solid fa-floppy-disk"></i> Guardar Liga</button>
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
    <!-- Summernote JS - CDN Link -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script>
        $('#summerEnvivo').summernote({
            placeholder: 'Hello Bootstrap 5',
            tabsize: 2,
            height: 400
        });
    </script>
    <!-- //Summernote JS - CDN Link -->
</body>

</html>