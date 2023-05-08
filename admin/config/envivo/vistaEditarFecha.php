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
                <div class="row justify-content-center align-content-center text-start">

                    <?php
                    include '../conexion2.php';
                    $id = $_REQUEST['id_tituloenvivo'];
                    $sql = "SELECT * FROM tbl_tituloenvivo WHERE id_tituloenvivo=$id";
                    $resultado = $conexion->query($sql);
                    $fila = $resultado->fetch_assoc();
                    ?>
                    <div class="container">
                        <div class="d-flex container_titu_agenda_Edit">
                            <i class="fa-solid fa-pen"></i>
                            <h1>Editar Titulo de Agenda</h1>
                        </div>
                        <br>
                        <form action="editarTituloAgenda.php?envivo_id=<?php echo $fila['id_tituloenvivo'] ?>" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="txtfecha" class="form-label">Titulo de Fecha:</label>
                                <input type="text" class="form-control" name="txtfecha" value="<?php echo $fila['title_tituloenvivo'] ?>">
                            </div>
                            <a href="../../envivo.php" class="btn btn-secondary btn-sm me-3"><i class="fa-solid fa-arrow-left-long"></i> Regresar</a>
                            <button type="submit" class="btn btn-primary btn-sm"><i class="fa-solid fa-floppy-disk"></i> Editar</button>
                        </form>
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