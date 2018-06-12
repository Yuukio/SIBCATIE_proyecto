<?php
include_once 'app/Conexion.inc.php';
include_once 'app/RepositorioUsuario.inc.php';

$titulo = 'SIBCATIE';

include_once 'plantillas/documento-declaracion.inc.php';
?>

<?php
Conexion::abrir_conexion();
$total_usuarios = RepositorioUsuario::obtenerNumeroUsuarios(Conexion::obtener_conexion());
Conexion::cerrar_conexion();
?>

<body style="background: #f2f2f2;">

    <!-- Navigation -->
    <nav class="navbar-sesion navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img  src="img/sibcatie-logo.png">
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item">
                        <a class="regresar-home" href="index.php">Regresar al Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid div-sesion sombra">
        
        <!--registrar cuenta-->
        <div class="container-fluid div-registro">
            <div class="col-md-12 col-all">
                <h2>Registrar cuenta en SIBCATIE</h2>
                <p class="subhead">¡Únete a Crunchyroll! ¡Se tarda un clic!</p>
            </div>
            <div class="col-md-6 col-all">
                <p>
                    <label for="signup_with_profile_email" class="required">
                        <span class="label-text">Dirección de Correo Electrónico</span>
                        <input class="std-form">
                    </label>
                </p>
            </div>
            <div class="col-md-6 col-all">
                <p>
                    <label for="signup_with_profile_username" class="required">
                        <span class="label-text">Nombre de Usuario</span>
                        <input class="std-form">
                    </label>
                </p>
            </div>
            <div class="col-md-6 col-all">
                <p>
                    <label for="signup_with_profile_password" class="required">
                        <span class="label-text">Contrasena</span>
                        <input class="std-form">
                    </label>
                </p>
            </div>
            <div class="col-md-6 col-all">
                <p>
                    <label for="signup_with_profile_password" class="required">
                        <span class="label-text">Repetir contrasena</span>
                        <input class="std-form">
                    </label>
                </p>
            </div>
            <div class="col-md-12 col-all" style="text-align: center">
                <button class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" type="submit">
                    Crear una Cuenta
                </button>
            </div>
        </div>
        
        <!--iniciar secion-->
        <div class="col-md-4">
            <div class="col-md-12 col-all">
                <h2>Inicia sesion</h2>
                <p class="subhead">Ya tienes cuenta? Inicia sesion mas abajo.</p>
            </div>
            <div class="col-md-12 col-all">
                <p>
                    <label for="signup_with_profile_email" class="required">
                        <span class="label-text">Correo Electronico o Usuario</span>
                        <input class="std-form">
                    </label>
                </p>
            </div>
            <div class="col-md-12 col-all">
                <p>
                    <label for="signup_with_profile_password" class="required">
                        <span class="label-text">Contrasena</span>
                        <input class="std-form">
                    </label>
                </p>
            </div>
            <div class="col-md-12 col-all" style="text-align: center">
                <button class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" type="submit">
                    Iniciar Sesion
                </button>
            </div>
        </div>
    </div>

    <?php
    include_once './plantillas/documento-cierre.inc.php';
    ?>