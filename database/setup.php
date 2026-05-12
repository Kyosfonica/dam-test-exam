<?php
require_once __DIR__ . '/../config/database.php';

try {
    $db = Database::getInstance()->conn;

    // Crear tabla cars
    $db->exec("CREATE TABLE IF NOT EXISTS cars (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        plate TEXT UNIQUE NOT NULL,
        brand TEXT NOT NULL,
        model TEXT NOT NULL,
        is_available INTEGER DEFAULT 1
    )");

    // Crear tabla clients
    $db->exec("CREATE TABLE IF NOT EXISTS clients (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        dni TEXT UNIQUE NOT NULL,
        name TEXT NOT NULL,
        email TEXT NOT NULL
    )");

    // Crear tabla rentals
    $db->exec("CREATE TABLE IF NOT EXISTS rentals (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        car_id INTEGER NOT NULL,
        client_id INTEGER NOT NULL,
        rent_date DATE NOT NULL,
        return_date DATE DEFAULT NULL,
        FOREIGN KEY (car_id) REFERENCES cars(id),
        FOREIGN KEY (client_id) REFERENCES clients(id)
    )");

    // Insertar datos de prueba
    $db->exec("INSERT OR IGNORE INTO cars (plate, brand, model, is_available) VALUES 
        ('1234ABC', 'Toyota', 'Corolla', 1),
        ('5678DEF', 'Ford', 'Focus', 1),
        ('9012GHI', 'Seat', 'Ibiza', 0)");

    $db->exec("INSERT OR IGNORE INTO clients (dni, name, email) VALUES 
        ('11111111A', 'Juan Perez', 'juan@example.com'),
        ('22222222B', 'Maria Garcia', 'maria@example.com')");

    // El coche 9012GHI está alquilado por Maria
    $db->exec("INSERT OR IGNORE INTO rentals (car_id, client_id, rent_date) VALUES 
        (3, 2, date('now'))");

    echo "Base de datos inicializada correctamente.\n";

} catch (PDOException $e) {
    echo "Error al inicializar la base de datos: " . $e->getMessage() . "\n";
}
?>
