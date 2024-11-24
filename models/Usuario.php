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
                header("Location:" . Conectar::ruta() . "/views/inicio.php");
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
                       
                        header("Location:" . Conectar::ruta() . "/views/home.php");
                        exit();
                    } else {
                        // Redirige al archivo 404.php si los datos son incorrectos
                        header("Location:" . Conectar::ruta() . "/views/login.php?m=1");
                        exit();
                    }
                } else {
                    die("Error en la preparación de la consulta SQL: " . $conectar->errorInfo());
                }
            }
        }
    }

    public function restablecer_contrasena($correo, $nueva_contrasena) {
        try {
            $conexion = parent::getConexion();
            $sql = "SELECT * FROM usuario WHERE usu_correo = ?";
            $stmt = $conexion->prepare($sql);
            $stmt->execute([$correo]);
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($usuario) {
                // Actualizar la contraseña
                $sql = "UPDATE usuario SET usu_pass = ? WHERE usu_correo = ?";
                $stmt = $conexion->prepare($sql);
                $nueva_contrasena_hash = $nueva_contrasena;
                $stmt->execute([$nueva_contrasena_hash, $correo]);
                return true;
            } else {
                return false; // Usuario no encontrado
            }
        } catch (Exception $e) {
            return false; // Error
        }
    }

    
    public function get_usuarios() {
        $sql = "SELECT * FROM usuario ORDER BY usu_nom ASC";
        $stmt = parent::getConexion()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function get_usuario_by_id($id) {
        $sql = "SELECT * FROM usuario WHERE usu_id = ?";
        $stmt = parent::getConexion()->prepare($sql);
        $stmt->bindValue(1, $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function insert_usuario($nombre, $apep, $apem, $correo, $telf, $pass, $estado) {
        $sql = "INSERT INTO usuario (usu_nom, usu_apep, usu_apem, usu_correo, usu_telf, usu_pass, est) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = parent::getConexion()->prepare($sql);
        $stmt->bindValue(1, $nombre);
        $stmt->bindValue(2, $apep);
        $stmt->bindValue(3, $apem);
        $stmt->bindValue(4, $correo);
        $stmt->bindValue(5, $telf);
        $stmt->bindValue(6, $pass);
        $stmt->bindValue(7, $estado);
        return $stmt->execute();
    }

    public function update_usuario($id, $nombre, $apep, $apem, $correo, $telf, $pass, $estado) {
        $sql = "UPDATE usuario SET usu_nom = ?, usu_apep = ?, usu_apem = ?, usu_correo = ?, usu_telf = ?, usu_pass = ?, est = ? WHERE usu_id = ?";
        $stmt = parent::getConexion()->prepare($sql);
        $stmt->bindValue(1, $nombre);
        $stmt->bindValue(2, $apep);
        $stmt->bindValue(3, $apem);
        $stmt->bindValue(4, $correo);
        $stmt->bindValue(5, $telf);
        $stmt->bindValue(6, $pass);
        $stmt->bindValue(7, $estado);
        $stmt->bindValue(8, $id, PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function delete_usuario($id) {
        $sql = "DELETE FROM usuario WHERE usu_id = ?";
        $stmt = parent::getConexion()->prepare($sql);
        $stmt->bindValue(1, $id, PDO::PARAM_INT);
        return $stmt->execute();
    }


}
?>