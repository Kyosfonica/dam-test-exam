<?php
class Database {
    private static $instance = null;
    public $conn;

    private function __construct() {
        try {
            // Usa una ruta absoluta al archivo SQLite basándose en la ubicación de este archivo
            $dbPath = __DIR__ . '/../database/database.sqlite';
            $this->conn = new PDO("sqlite:" . $dbPath);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch(PDOException $exception) {
            echo "Error de conexión a la base de datos: " . $exception->getMessage();
            exit;
        }
    }

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new Database();
        }
        return self::$instance;
    }
}
?>
