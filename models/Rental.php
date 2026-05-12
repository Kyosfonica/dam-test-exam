<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/Car.php';

class Rental {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->conn;
    }

    public function getAllRentals() {
        $stmt = $this->db->query("
            SELECT rentals.*, cars.brand, cars.model, cars.plate, clients.name as client_name
            FROM rentals
            JOIN cars ON rentals.car_id = cars.id
            JOIN clients ON rentals.client_id = clients.id
            ORDER BY rentals.rent_date DESC
        ");
        return $stmt->fetchAll();
    }

    public function getActiveRentals() {
        $stmt = $this->db->query("
            SELECT rentals.*, cars.brand, cars.model, cars.plate, clients.name as client_name
            FROM rentals
            JOIN cars ON rentals.car_id = cars.id
            JOIN clients ON rentals.client_id = clients.id
            WHERE rentals.return_date IS NULL
            ORDER BY rentals.rent_date DESC
        ");
        return $stmt->fetchAll();
    }

    public function getRentalsByClient($client_id) {
        $stmt = $this->db->prepare("
            SELECT rentals.*, cars.brand, cars.model, cars.plate 
            FROM rentals
            JOIN cars ON rentals.car_id = cars.id
            WHERE rentals.client_id = ?
            ORDER BY rentals.rent_date DESC
        ");
        $stmt->execute([$client_id]);
        return $stmt->fetchAll();
    }

    public function rentCar($car_id, $client_id) {
        try {
            $this->db->beginTransaction();

            // Insertar el alquiler
            $stmt = $this->db->prepare("INSERT INTO rentals (car_id, client_id, rent_date) VALUES (?, ?, date('now'))");
            $stmt->execute([$car_id, $client_id]);

            // Marcar el coche como no disponible
            $carModel = new Car();
            $carModel->setAvailability($car_id, 0);

            $this->db->commit();
            return true;
        } catch (Exception $e) {
            $this->db->rollBack();
            return false;
        }
    }

    public function returnCar($rental_id, $car_id) {
        try {
            $this->db->beginTransaction();

            // Actualizar la fecha de devolución
            $stmt = $this->db->prepare("UPDATE rentals SET return_date = date('now') WHERE id = ?");
            $stmt->execute([$rental_id]);

            // Marcar el coche como disponible de nuevo
            $carModel = new Car();
            $carModel->setAvailability($car_id, 1);

            $this->db->commit();
            return true;
        } catch (Exception $e) {
            $this->db->rollBack();
            return false;
        }
    }
}
?>
