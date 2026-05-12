<?php
require_once __DIR__ . '/../models/Car.php';

class CarController {
    
    // MÉTODO DE EJEMPLO: Completamente implementado para que los alumnos lo usen como guía
    public function index() {
        $carModel = new Car();
        
        // Si hay una búsqueda por marca, usamos ese método, si no, obtenemos todos
        if (isset($_GET['search']) && !empty($_GET['search'])) {
            $cars = $carModel->searchByBrand($_GET['search']);
        } else {
            $cars = $carModel->getAll();
        }
        
        // Pasamos los datos a la vista
        // Usamos ob_start para guardar el HTML de la vista en la variable $content
        ob_start();
        require_once __DIR__ . '/../views/cars/index.php';
        $content = ob_get_clean();
        
        // Cargamos el layout principal que imprimirá $content
        require_once __DIR__ . '/../views/layout.php';
    }

    // MÉTODO DE EJEMPLO: Completamente implementado (Ver detalle de un coche)
    public function show() {
        if (!isset($_GET['id'])) {
            echo "Error: Falta el ID del coche.";
            return;
        }

        $carModel = new Car();
        $car = $carModel->getById($_GET['id']);

        if (!$car) {
            echo "Error: Coche no encontrado.";
            return;
        }

        ob_start();
        require_once __DIR__ . '/../views/cars/show.php';
        $content = ob_get_clean();
        
        require_once __DIR__ . '/../views/layout.php';
    }

    // ESQUELETO: Mostrar formulario de creación
    public function create() {
        // TODO: Cargar la vista views/cars/create.php usando ob_start() y el layout
        // (Fíjate en cómo se hace en el método index o show)
    }

    // ESQUELETO: Procesar el formulario de creación
    public function store() {
        // TODO: Comprobar que los datos llegan por $_POST ('plate', 'brand', 'model')
        
        // TODO: Instanciar el modelo Car
        
        // TODO: Llamar al método create($plate, $brand, $model) del modelo
        
        // TODO: Redirigir al listado de coches si tiene éxito, o mostrar error si falla.
        // Ejemplo de redirección: header('Location: index.php?controller=car&action=index');
    }
}
?>
