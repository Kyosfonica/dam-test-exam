<?php
// Iniciamos la sesión para poder guardar datos temporalmente
session_start();

// Si no existen coches en la sesión, inicializamos un array por defecto
if (!isset($_SESSION['cars'])) {
    $_SESSION['cars'] = [
        1 => ['id' => 1, 'plate' => '1234ABC', 'brand' => 'Toyota', 'model' => 'Corolla', 'available' => true, 'rented_by' => null],
        2 => ['id' => 2, 'plate' => '5678DEF', 'brand' => 'Ford', 'model' => 'Focus', 'available' => true, 'rented_by' => null],
        3 => ['id' => 3, 'plate' => '9012GHI', 'brand' => 'Seat', 'model' => 'Ibiza', 'available' => true, 'rented_by' => null],
    ];
}

// Comprobamos si el usuario ha "iniciado sesión" (es decir, si existe la cookie)
$client_name = isset($_COOKIE['client_name']) ? $_COOKIE['client_name'] : null;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen DAM - Alquiler de Coches Simplificado</title>
    <!-- Usamos PicoCSS para un diseño limpio sin escribir CSS extra -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
</head>
<body>
    <header class="container">
        <nav>
            <ul>
                <li><strong>RentACar DAM (Simplificado)</strong></li>
            </ul>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <?php if ($client_name): ?>
                    <li>Hola, <?php echo htmlspecialchars($client_name); ?></li>
                    <li><a href="logout.php" role="button" class="secondary">Cerrar Sesión</a></li>
                <?php else: ?>
                    <li><a href="login.php" role="button">Identificarse</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>

    <main class="container">
