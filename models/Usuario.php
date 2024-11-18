<?php
require_once("../config/conexion.php");

class Usuario extends Conectar {
    public function login() {
        $conectar = parent::Conexion();
        parent::set_names();
        

        if (isset($_POST["enviar"])) {
            $correo = $_POST["correo"];
            $password = $_POST["passwd"];
            

            if (empty($correo) && empty($password)) {
                header("Location:" . Conectar::ruta() . "views/inicio.php");
                exit();
            } else {
                // Ajusta el nombre de las columnas para que coincidan con la base de datos
                $sql = "SELECT * FROM usuario WHERE usu_correo = :correo AND usu_pass = :password AND est = 1";
                $stmt = $conectar->prepare($sql);

                if ($stmt) {
                    // Asigna los parámetros
                    $stmt->bindValue(':correo', $correo);
                    $stmt->bindValue(':password', $password);
                    $stmt->execute();

                    // Obtiene el resultado de la consulta
                    $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
                    
                    // Verifica si se encontró un usuario
                    if (is_array($resultado) && count($resultado) > 0) {
                        $_SESSION["usu_id"] = $resultado["usu_id"];
                        $_SESSION["nombre"] = $resultado["usu_nom"];
                        $_SESSION["ape_paterno"] = $resultado["usu_apep"];
                        $_SESSION["correo"] = $resultado["usu_correo"];
                       
                        header("Location:" . Conectar::ruta() . "views/home.php");
                        exit();
                    } else {
                        // Redirige al archivo 404.php si los datos son incorrectos
                        header("Location:" . Conectar::ruta() . "views/login.php?m=1");
                        exit();
                    }
                } else {
                    die("Error en la preparación de la consulta SQL: " . $conectar->errorInfo());
                }
            }
        }
    }
}
?>
