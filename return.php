<?php
// ESQUELETO
session_start();

// TODO: Comprobar si NO existe la cookie 'client_name'
// Si no existe, redirigir a login.php usando header() y exit;

// TODO: Recoger el ID del coche por el método GET (parámetro 'id' en la URL)

// TODO: Comprobar que el coche con ese ID existe en $_SESSION['cars'] 
// Y comprobar que su 'rented_by' es igual a $_COOKIE['client_name']
// Si se cumplen las condiciones:
// 1. Cambiar el valor 'available' a true para ese coche.
// 2. Asignar null al campo 'rented_by' de ese coche.

// TODO: Redirigir de nuevo a index.php
?>
