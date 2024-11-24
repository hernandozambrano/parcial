<?php
// Inicia la sesión si no está iniciada
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Verifica si las variables de sesión están definidas
if (!isset($_SESSION["usu_id"]) || !isset($_SESSION["nombre"])) {
    echo "Error: No hay una sesión activa o las variables de sesión no están definidas.";
    exit();
} 
?>

<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Sección del usuario -->
        <li class="nav-header">
            <div class="info text-center">
                <!-- Input oculto con el ID del usuario -->
                <input type="hidden" id="usu_idx" value="<?php echo $_SESSION["usu_id"]; ?>">
                <!-- Mostrar el nombre del usuario -->
                <a href="#" class="d-block">
                    <i class="fas fa-user-circle"></i> 
                    <?php echo $_SESSION["nombre"]; ?>
                </a>
            </div>
        </li>

        <!-- Opciones del menú -->
        <li class="nav-item">
                <a href="usuario.php" class="nav-link">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                    USUARIO
                </p>
                </a>
              </li>
        <li class="nav-item">
            <a href="menu.php" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>Menu</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="Social_Media.php" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>Social Media</p>
            </a>
        </li>
        </li>
        <li class="nav-item">
            <a href="experiencia.php" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>Experiencia</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="estudios.php" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>Estudios</p>
            </a>
        </li>

        <!-- Sección de salir -->
        <li class="nav-header">SALIR</li>
        <li class="nav-item">
            <a href="./logout.php" class="nav-link">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>Logout</p>
            </a>
        </li>
    </ul>
</nav>
