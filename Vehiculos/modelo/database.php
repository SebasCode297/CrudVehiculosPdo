<?php
class Database {
    private $host = 'localhost';  // O '127.0.0.1' si falla
    private $db_name = 'patio';   // Nombre de tu BD
    private $username = 'root';   // Usuario de MySQL
    private $password = '';       // Contraseña (vacía por defecto en XAMPP)
    protected $conn;

    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO(
                "mysql:host=" . $this->host . ";dbname=" . $this->db_name, 
                $this->username, 
                $this->password
            );
            $this->conn->exec("set names utf8");
        } catch(PDOException $exception) {
            echo "Error de conexión: " . $exception->getMessage();
        }
        return $this->conn;
    }
}
?>