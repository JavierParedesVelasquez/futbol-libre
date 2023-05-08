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
                $id = $_REQUEST['id_home'];
                $sql = "SELECT * FROM home WHERE id_home=$id";
                $resultado = $conexion->query($sql);
                $fila = $resultado->fetch_assoc();
                ?>
                <form action="editarPagina.php?home_id=<?php echo $fila['id_home'] ?>" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="panel1">
                                <div class="panel-heading d-flex pb-3">
                                    <i class="fa-solid fa-newspaper"></i>
                                    <h3>Editar Contenido de arriba</h3>
                                </div>
                                <div class="panel-body">
                                    <label for="txtsummerPagina1" class="form-label">Agregar Contenido</label>
                                    <textarea name="txtsummerPagina1" id="summerEnvivo" class="form-control" rows="4">
                                        <?php echo $fila['summer1_home'] ?>
                                    </textarea>
                                </div>
                            </div>
                            <div class="panel1">
                                <div class="panel-heading d-flex pb-3">
                                    <i class="fa-solid fa-newspaper"></i>
                                    <h3>Editar Contenido de abajo</h3>
                                </div>
                                <div class="panel-body">
                                    <label for="txtsummerPagina2" class="form-label">Agregar Contenido</label>
                                    <textarea name="txtsummerPagina2" id="summerEnvivo2" class="form-control" rows="4">
                                        <?php echo $fila['summer2_home'] ?>
                                    </textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="panel1">
                                <div class="panel-heading d-flex pb-3">
                                    <h3>Editar Contenido SEO</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="mb-3">
                                        <label for="txttituseo_pagina" class="form-label">Meta Titulo:</label>
                                        <input type="text" name="txttituseo_pagina" class="form-control" value="<?php echo $fila['tituloseo_home'] ?>" placeholder="Ingrese Meta Titulo" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="txtdescripcionseo_pagina" class="form-label">Meta Descripci&oacute;n:</label>
                                        <input type="text" name="txtdescripcionseo_pagina" class="form-control" value="<?php echo $fila['descripcionseo_home'] ?>" placeholder="Ingresese Meta Descripcion" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="txtpalabrasclaveseo_pagina" class="form-label">Palabras Clave:</label>
                                        <input type="text" name="txtpalabrasclaveseo_pagina" class="form-control" value="<?php echo $fila['palabrasclaveseo_home'] ?>" placeholder="Ingrese Palabras Clave" required>
                                    </div>
                                </div>
                            </div>
                            <div class="panel1">
                                <div class="panel-heading d-flex pb-3">
                                    <h3>Editar Logo:</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="mb-3">
                                        <td><img class="mb-3" style="width:100px;" src="data:image/jpg;base64,<?php echo base64_encode($fila['logo']) ?>" alt=""></td> <br>
                                        <label for="exampleInputPassword1" class="form-label">Editar Logo:</label>
                                        <input type="file" class="form-control" id="txtlogo" name="txtlogo">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mb-5">
                            <a href="../../pagina.php" class="btn btn-secondary btn-sm me-3"><i class="fa-solid fa-arrow-left-long"></i> Regresar</a>
                            <button type="submit" class="btn btn-primary btn-sm"><i class="fa-solid fa-floppy-disk"></i> Editar Post</button>
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
            // placeholder: 'Hello user',
            tabsize: 2,
            height: 400
        });
        $('#summerEnvivo2').summernote({
            // placeholder: 'Hello user',
            tabsize: 2,
            height: 400
        });
    </script>

    <!-- //Summernote JS - CDN Link -->
</body>

</html>