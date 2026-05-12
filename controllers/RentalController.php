<?php
require_once __DIR__ . '/../models/Rental.php';
require_once __DIR__ . '/../models/Car.php';
require_once __DIR__ . '/../models/Client.php';

class RentalController {
    
    // ESQUELETO: Mostrar lista de alquileres
    public function index() {
        // TODO: Instanciar modelo Rental
        // TODO: Puedes usar getAllRentals() o getActiveRentals() según prefieras mostrar
        // TODO: Cargar vista views/rentals/index.php
    }

    // ESQUELETO: Mostrar formulario para alquilar un coche
    public function create() {
        // TODO: Necesitarás instanciar Car y Client para obtener todos los coches disponibles y todos los clientes
        // TODO: Pasa esos datos a la vista para rellenar los `<select>` (desplegables) del formulario
        // TODO: Cargar vista views/rentals/create.php
    }

    // ESQUELETO: Procesar el alquiler
    public function store() {
        // TODO: Comprobar que llegan los datos POST ('car_id', 'client_id')
        // TODO: Instanciar Rental y llamar a rentCar()
        // TODO: Redirigir a index.php?controller=rental&action=index
    }

    // ESQUELETO: Procesar la devolución de un coche
    public function returnCar() {
        // TODO: Comprobar que llegan por $_GET ('id' del alquiler y 'car_id')
        // TODO: Instanciar Rental y llamar a returnCar()
        // TODO: Redirigir a index.php?controller=rental&action=index
    }
}
?>
