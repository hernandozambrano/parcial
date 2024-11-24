<?php
class Conectar {
    protected $dbh;
    protected function Conexion() {

        try {
            $host = "localhost"; 
            $port = "3306"; // Especifica el puerto que usa tu servidor MySQL (por defecto es 3306)
            $dbname = "paginaher"; 
            $user = "root"; 
            $pass = ""; 

            // Crear una instancia de PDO con el puerto especificado
            $this->dbh = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $user, $pass);
            $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           

            // Retornar la conexión
            return $this->dbh;
        } catch (PDOException $e) {
            // Capturar y mostrar errores en caso de fallos
            die("Error en la conexión: " . $e->getMessage());
        }
    }

    public function getConexion() {
        if (!$this->dbh) {
            $this->Conexion();
        }
        return $this->dbh;
    }

   public function set_names() {
        // Configurar el conjunto de caracteres a UTF-8
        return $this->dbh->query("SET NAMES 'utf8'");
    }

    public static function ruta() {
        // Retorna la URL base del proyecto
        return "http://localhost/PaginaHZ/";
    }
}
?>
