<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen DAM - Alquiler de Coches</title>
    <!-- Usamos PicoCSS para un diseño limpio sin escribir CSS extra -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
    <style>
        .is-available { color: var(--pico-ins-color); font-weight: bold; }
        .not-available { color: var(--pico-del-color); font-weight: bold; }
    </style>
</head>
<body>
    <header class="container">
        <nav>
            <ul>
                <li><strong>RentACar DAM</strong></li>
            </ul>
            <ul>
                <li><a href="index.php?controller=car&action=index">Coches</a></li>
                <li><a href="index.php?controller=client&action=index">Clientes</a></li>
                <li><a href="index.php?controller=rental&action=index">Alquileres</a></li>
            </ul>
        </nav>
    </header>

    <main class="container">
        <?php 
        // Aquí se inyectará el contenido de la vista específica
        if (isset($content)) {
            echo $content;
        } 
        ?>
    </main>

    <footer class="container">
        <hr>
        <p><small>Examen Desarrollo de Aplicaciones Multiplataforma - <?php echo date('Y'); ?></small></p>
    </footer>
</body>
</html>
