<div class="row justify-content-center align-content-center">
    <div class="col-8 barra barra1">
        <img src="assets/img/logo_admin.png" alt="" width="50">
        <h2 class="text-white ms-2 barra_text_admin"> Admin</h2>
    </div>
    <div class="col-4 text-end barra">
        <ul class="navbar-nav mr-auto">
            <li>    
                <a href="#" class="px-3 text-light perfil dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-circle user"></i></a>

                <div class="dropdown-menu" aria-labelledby="navbar-dropdown">
                    <a class="dropdown-item menuperfil cerrar" href="#"><i class="fa-solid fa-user"></i><?php echo $_SESSION['nombre_user'] ?>
                    </a>
                    <a class="dropdown-item menuperfil cerrar" href="../login/login"><i class="fas fa-sign-out-alt m-1"></i>Salir
                    </a>
                </div>
            </li>
        </ul>
    </div>
</div>