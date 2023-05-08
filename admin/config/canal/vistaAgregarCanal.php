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
                <form action="agregarCanal.php" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="panel1">
                                <div class="panel-heading d-flex pb-3">
                                    <i class="fa-solid fa-tv"></i>
                                    <h3>Agregar Canal Destacado (vista principal)</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Titulo Canal Destacado:</label>
                                        <input type="text" class="form-control" id="txttitulo" name="txttitulo" placeholder="Ingrese titulo de Canal" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Descripci&oacute;n Canal Destacado:</label>
                                        <input type="text" class="form-control" id="txtparrafo" name="txtparrafo" placeholder="Ingresar Descripci&oacute;n del Canal" required>
                                    </div>
                                </div>

                            </div>
                            <div class="panel1">
                                <div class="panel-heading d-flex pb-3">
                                    <i class="fa-solid fa-square-pen"></i>
                                    <h3>Titulo Canal (vista secundaria)</h3>
                                </div>
                                <div class="panel-body">
                                    <input type="text" name="txttitupostcanal" class="form-control" placeholder="Ingresar Titulo del post" required>
                                </div>
                            </div>
                            <div class="panel1">
                                <div class="panel-heading d-flex pb-3">
                                    <i class="fa-solid fa-newspaper"></i>
                                    <h3>Contenido</h3>
                                </div>
                                <div class="panel-body">
                                    <label for="txtsummerCanal" class="form-label">Agregar Contenido</label>
                                    <textarea name="txtsummerCanal" id="summerEnvivo" class="form-control" rows="4"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="panel1">
                                <div class="panel-heading d-flex pb-3">
                                    <h3>Imagen</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Imagen</label>
                                        <input type="file" class="form-control" id="txtimagen" name="txtimagen" required>
                                    </div>
                                </div>
                            </div>
                            <div class="panel1">
                                <div class="panel-heading d-flex pb-3">
                                    <h3>Contenido SEO</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="mb-3">
                                        <label for="txttituseo_envivo" class="form-label">Meta Titulo:</label>
                                        <input type="text" name="txttituseo_canal" class="form-control" placeholder="Ingrese Meta Titulo" onload="crearURLAmigable(this.value)" onkeyup="crearURLAmigable(this.value)" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="txtdescripcionseo_envivo" class="form-label">Meta Descripci&oacute;n:</label>
                                        <input type="text" name="txtdescripcionseo_canal" class="form-control" placeholder="Ingresese Meta Descripcion" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="txtpalabrasclaveseo_envivo" class="form-label">Palabras Clave:</label>
                                        <input type="text" name="txtpalabrasclaveseo_canal" class="form-control" placeholder="Ingrese Palabras Clave" required>
                                    </div>
                                </div>
                            </div>
                            <div class="panel1">
                                <div class="panel-heading d-flex pb-3">
                                    <h3>Generar URL amigable</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="mb-3">
                                        <label for="txtdescripcionseo_envivo" class="form-label">Slug:</label>
                                        <textarea name="urlAmigable" id="urlAmigable" class="form-control" readonly></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="panel1">
                                <div class="panel-heading d-flex pb-3">
                                    <h3>Iframe</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="mb-3">
                                        <label for="txtiframe" class="form-label">Codigo Iframe:</label>
                                        <textarea name="txtiframe" class="form-control" placeholder="Ingresar Iframe" required></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mb-5">
                            <a href="../../canal.php" class="btn btn-secondary btn-sm me-3"><i class="fa-solid fa-arrow-left-long"></i> Regresar</a>
                            <button type="submit" class="btn btn-primary btn-sm"><i class="fa-solid fa-floppy-disk"></i> Guardar Post</button>
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
            placeholder: 'Hello user',
            tabsize: 2,
            height: 400
        });
    </script>
    <!-- //Summernote JS - CDN Link -->
</body>

</html>