<?php
require_once("config/conexion.php");

// Clase extendida para probar la conexión
class TestConexion extends Conectar {
    public function probarConexion() {
        try {
            $conexion = $this->Conexion();
            if ($conexion) {
                echo "Conexión exitosa a la base de datos.";
            }
        } catch (PDOException $e) {
            echo "Error en la conexión: " . $e->getMessage();
        }
    }
}

// Instancia de prueba y ejecución
$test = new TestConexion();
$test->probarConexion();
?>
