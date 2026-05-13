# Examen Práctico DAM: Alquiler de Coches

¡Bienvenido al examen práctico! En esta prueba vas a demostrar tus conocimientos básicos de programación web con PHP, manejando variables de sesión (`$_SESSION`), cookies (`$_COOKIE`), redirecciones y recepción de datos mediante GET y POST.

Para mantener el proyecto simple, **NO hay base de datos**. Los datos de los coches se guardan temporalmente en la memoria del servidor usando la sesión de PHP. Si reinicias el navegador, los datos volverán a su estado inicial. 

## Archivos Provistos (No necesitas modificarlos)

- **`includes/header.php`**: Inicia la sesión (`session_start()`), carga unos coches iniciales por defecto y pinta la cabecera HTML (con los menús).
- **`includes/footer.php`**: Cierra las etiquetas HTML.
- **`index.php`**: Este archivo está parcialmente programado. Sirve como ejemplo base mostrando la tabla de coches disponibles y, si existe la cookie del usuario, sus coches alquilados. Tendrás que rellenar un hueco en este archivo, en el examen real habrá que hacer más.

## Archivos a Rellenar

Tu objetivo es rellenar la lógica en los siguientes archivos. Ábrelos y busca los comentarios que empiezan por `TODO:` para saber exactamente qué hacer:

1. **`index.php`**
   - Rellenar el bloque de código de la línea 34 a 40 para comprobar si `$client_name` tiene valor y pintar los enlaces de 'Alquilar' o 'Identifícate'.

2. **`login.php`**
   - Recibir el nombre enviado por el formulario usando el método POST (`$_POST`).
   - Crear una cookie llamada `client_name` con el nombre recibido.
   - Redirigir al usuario de vuelta a `index.php`.

2. **`rent.php`**
   - Recibir el ID del coche mediante el método GET (`$_GET['id']`).
   - Comprobar que el usuario está identificado (revisando que existe `$_COOKIE['client_name']`).
   - Buscar el coche en `$_SESSION['cars']` y cambiar su estado `available` a `false`.
   - Guardar el nombre del cliente en el campo `rented_by` del coche.
   - Redirigir a `index.php`.

3. **`return.php`**
   - Recibir el ID del coche por GET.
   - Verificar que pertenece a este usuario (el campo `rented_by` debe coincidir con `$_COOKIE['client_name']`).
   - Volver a poner `available` a `true` y `rented_by` a `null`.
   - Redirigir a `index.php`.

4. **`logout.php`**
   - Destruir la cookie `client_name` (sobreescribiéndola con un tiempo de expiración pasado).
   - Redirigir a `index.php`.

## Instrucciones para ejecutar el proyecto

### Opción 1: Servidor integrado de PHP (Recomendado)
Abre la terminal en esta carpeta y ejecuta:
```bash
php -S localhost:8000
```
Visita en tu navegador: `http://localhost:8000`

### Opción 2: WAMP / XAMPP
Copia esta carpeta entera dentro de `C:\wamp64\www\` (WAMP) o `C:\xampp\htdocs\` (XAMPP).
Asegúrate de que Apache está corriendo y visita `http://localhost/dam-exam-test`.

¡Mucha suerte!
