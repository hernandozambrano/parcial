<?php
// Define la URL base de tu proyecto
define("BASE_URL", "/PaginaHZ/views/");

// Llama al archivo de conexión
require_once("../config/conexion.php");

// Inicia la sesión si no está iniciada
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Verifica si el usuario está logueado
if (!isset($_SESSION["usu_id"])) {
    // Si no está logueado, redirige a 404.php
    header("Location: " . Conectar::ruta() . "views/404.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio | Dashboard</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Dashboard</h1>
        <div class="row">
            <!-- Caja 1 -->
            <div class="col-md-3">
                <div class="card text-white bg-info mb-3">
                    <div class="card-header">New Orders</div>
                    <div class="card-body">
                        <h5 class="card-title">150</h5>
                        <p class="card-text">More info</p>
                    </div>
                </div>
            </div>
            <!-- Caja 2 -->
            <div class="col-md-3">
                <div class="card text-white bg-success mb-3">
                    <div class="card-header">Bounce Rate</div>
                    <div class="card-body">
                        <h5 class="card-title">53%</h5>
                        <p class="card-text">More info</p>
                    </div>
                </div>
            </div>
            <!-- Caja 3 -->
            <div class="col-md-3">
                <div class="card text-white bg-warning mb-3">
                    <div class="card-header">User Registrations</div>
                    <div class="card-body">
                        <h5 class="card-title">44</h5>
                        <p class="card-text">More info</p>
                    </div>
                </div>
            </div>
            <!-- Caja 4 -->
            <div class="col-md-3">
                <div class="card text-white bg-danger mb-3">
                    <div class="card-header">Unique Visitors</div>
                    <div class="card-body">
                        <h5 class="card-title">65</h5>
                        <p class="card-text">More info</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
