<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/img/icon-title.svg">
  <link rel="stylesheet" href="assets/css/styles.css">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Login</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-12 col-sm-12  text-center">
        <img src="assets/img/banner1_login.png" class="rounded img-fluid" alt="...">
      </div>
      <div class="col-lg-6 col-md-12 col-sm-12 div_right">

          <form class="form_login" action="access.php" method="POST">
            <h2 class="text-center">WELCOME <i class="fa-solid fa-user"></i></h2>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Usuario:</label>
              <input type="text" class="form-control" id="txtusuario" name="txtusuario" placeholder="Ingresar usuario" required>
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Contraseña:</label>
              <input type="password" class="form-control" id="txtclave" name="txtclave" placeholder="Ingresar Contraseña" required>
            </div>
            <div class="text-center mb-5">
              <button type="submit" class="btn btn-primary"> Ingresar</button>
            </div>
          </form>

      </div>
    </div>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/34cd624114.js" crossorigin="anonymous"></script>
  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>