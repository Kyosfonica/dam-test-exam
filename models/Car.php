<?php
require_once __DIR__ . '/../config/database.php';

class Car {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->conn;
    }

    public function getAll() {
        $stmt = $this->db->query("SELECT * FROM cars");
        return $stmt->fetchAll();
    }

    public function getById($id) {
        $stmt = $this->db->prepare("SELECT * FROM cars WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function searchByBrand($brand) {
        $stmt = $this->db->prepare("SELECT * FROM cars WHERE brand LIKE ?");
        $stmt->execute(["%$brand%"]);
        return $stmt->fetchAll();
    }

    public function create($plate, $brand, $model) {
        $stmt = $this->db->prepare("INSERT INTO cars (plate, brand, model, is_available) VALUES (?, ?, ?, 1)");
        return $stmt->execute([$plate, $brand, $model]);
    }

    public function setAvailability($id, $is_available) {
        $stmt = $this->db->prepare("UPDATE cars SET is_available = ? WHERE id = ?");
        return $stmt->execute([$is_available ? 1 : 0, $id]);
    }
}
?>
