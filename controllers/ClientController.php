<?php
require_once __DIR__ . '/../models/Client.php';

class ClientController {
    
    // ESQUELETO: Mostrar lista de clientes
    public function index() {
        // TODO: Instanciar modelo Client
        // TODO: Obtener todos los clientes (getAll)
        // TODO: Cargar vista views/clients/index.php usando ob_start y el layout
    }

    // ESQUELETO: Mostrar formulario de creación
    public function create() {
        // TODO: Cargar vista views/clients/create.php
    }

    // ESQUELETO: Procesar formulario de creación
    public function store() {
        // TODO: Comprobar que llegan los datos POST ('dni', 'name', 'email')
        // TODO: Instanciar Client y llamar a create()
        // TODO: Redirigir a index.php?controller=client&action=index
    }
}
?>
