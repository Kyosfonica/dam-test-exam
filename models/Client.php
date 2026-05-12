<?php
require_once __DIR__ . '/../config/database.php';

class Client {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->conn;
    }

    public function getAll() {
        $stmt = $this->db->query("SELECT * FROM clients");
        return $stmt->fetchAll();
    }

    public function getById($id) {
        $stmt = $this->db->prepare("SELECT * FROM clients WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function create($dni, $name, $email) {
        $stmt = $this->db->prepare("INSERT INTO clients (dni, name, email) VALUES (?, ?, ?)");
        return $stmt->execute([$dni, $name, $email]);
    }
}
?>
