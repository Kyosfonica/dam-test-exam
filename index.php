<?php
// Front Controller
// Este archivo recibe todas las peticiones y las redirige al controlador adecuado

$controllerName = isset($_GET['controller']) ? $_GET['controller'] : 'car';
$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';

// Convertimos car a CarController
$controllerClass = ucfirst($controllerName) . 'Controller';

// Ruta al controlador
$controllerFile = __DIR__ . '/controllers/' . $controllerClass . '.php';

if (file_exists($controllerFile)) {
    require_once $controllerFile;
    
    if (class_exists($controllerClass)) {
        $controller = new $controllerClass();
        
        if (method_exists($controller, $actionName)) {
            // Ejecutamos la acción (ej: $controller->index())
            $controller->$actionName();
        } else {
            echo "Error: La acción $actionName no existe en $controllerClass";
        }
    } else {
        echo "Error: La clase $controllerClass no existe.";
    }
} else {
    echo "Error: El controlador $controllerClass no fue encontrado.";
}
?>
