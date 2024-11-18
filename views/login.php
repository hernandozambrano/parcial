<?php
session_start();
require_once("../config/conexion.php");

if (isset($_POST["enviar"]) && $_POST["enviar"] == "si") {
  require_once("../models/Usuario.php");
  $usuario = new Usuario();
  $usuario->login();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Administrador LTE | Iniciar sesión</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <b>Administrador</b> LTE
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Inicia sesión para iniciar tu sesión</p>

        <form action="login.php" method="post">
          <div class="input-group mb-3">
            <input type="email" name="correo" class="form-control" placeholder="Correo electrónico" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="passwd" class="form-control" placeholder="Contraseña" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">
                  Acuérdate de mí
                </label>
              </div>
            </div>
            <div class="col-4">
              <input type="hidden" name="enviar" value="si">
              <button type="submit" class="btn btn-primary btn-block">Iniciar sesión</button>
            </div>
          </div>
        </form>

        <!-- Alertas de error -->
        <?php
        if (isset($_GET["m"])) {
          switch ($_GET["m"]) {
            case "1":
        ?>
              <div class="alert alert-danger" role="alert">
                Los datos ingresados son incorrectos!
              </div>
            <?php
              break;
            case "2":
            ?>
              <div class="alert alert-warning" role="alert">
                El formulario tiene los campos vacíos!
              </div>
        <?php
              break;
          }
        }
        ?>

        <div class="social-auth-links text-center mb-3">
          <p>- O -</p>
          <a href="#" class="btn btn-block btn-primary">
            <i class="fab fa-facebook mr-2"></i> Iniciar sesión con Facebook
          </a>
          <a href="#" class="btn btn-block btn-danger">
            <i class="fab fa-google-plus mr-2"></i> Iniciar sesión con Google+
          </a>
        </div>

        <p class="mb-1">
          <a href="#">Olvidé mi contraseña</a>
        </p>
        <p class="mb-0">
          <a href="#" class="text-center">Registrar una nueva membresía</a>
        </p>
      </div>
    </div>
  </div>

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="https://cdn.jsdelivr.net/npm/admin-lte@3/dist/js/adminlte.min.js"></script>
</body>

</html>