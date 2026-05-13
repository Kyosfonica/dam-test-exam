<?php
// ESQUELETO
session_start();

// TODO: Comprobar si NO existe la cookie 'client_name'
// Si no existe, redirigir a login.php usando header() y exit;

// TODO: Recoger el ID del coche por el método GET (parámetro 'id' en la URL)

// TODO: Comprobar que el coche con ese ID existe en $_SESSION['cars'] y que su 'available' es true
// Si existe y está disponible:
// 1. Cambiar el valor 'available' a false para ese coche.
// 2. Asignar el valor de la cookie $_COOKIE['client_name'] al campo 'rented_by' de ese coche.

// TODO: Redirigir de nuevo a index.php
?>
