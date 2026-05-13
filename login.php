<?php
// ESQUELETO
// TODO: Si la petición es por POST y llega 'client_name'
// 1. Crear una cookie llamada 'client_name' con el valor recibido.
//    Pista: setcookie("nombre_cookie", "valor", tiempo_expiracion, "/");
// 2. Redirigir a index.php usando header("Location: index.php");
// 3. Poner exit; para detener la ejecución del script.

// Cargamos la cabecera después de la lógica de redirección
require_once __DIR__ . '/includes/header.php';
?>

<article>
    <header>
        <h2>Identificación de Cliente</h2>
    </header>
    
    <form action="login.php" method="POST">
        <label for="client_name">Tu Nombre:</label>
        <input type="text" name="client_name" id="client_name" required placeholder="Ej: Juan Perez">
        <small>Simularemos tu sesión de cliente usando una cookie temporal.</small>
        
        <input type="submit" value="Entrar">
    </form>
</article>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
