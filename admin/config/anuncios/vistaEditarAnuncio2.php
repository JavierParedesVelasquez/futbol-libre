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
                $id = $_REQUEST['id_anuncio2'];
                $sql = "SELECT * FROM anuncio2 WHERE id_anuncio2=$id";
                $resultado = $conexion->query($sql);
                $fila = $resultado->fetch_assoc();
                ?>
                <form action="editarAnuncio2.php?anuncio_id2=<?php echo $fila['id_anuncio2'] ?>" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel1">
                                <div class="panel-heading d-flex pb-3">
                                    <i class="fa-sharp fa-solid fa-bullhorn"></i>
                                    <h3>Editar Anuncio:</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Introducir Codigo html / script:</label>
                                        <textarea rows="10" cols="50" type="text" class="form-control" id="txtsrc" value="" name="txtsrc" placeholder="Ingrese titulo de Canal" ><?php echo $fila['codigo_anuncio2'] ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mb-5">
                            <a href="../../anuncios.php" class="btn btn-secondary btn-sm me-3"><i class="fa-solid fa-arrow-left-long"></i> Regresar</a>
                            <button type="submit" class="btn btn-primary btn-sm"><i class="fa-solid fa-floppy-disk"></i> Editar Anuncio</button>
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