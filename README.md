# Examen Práctico DAM: Sistema de Gestión de Alquiler de Coches

¡Bienvenido al examen práctico! En esta prueba, vas a demostrar tus conocimientos sobre el patrón de arquitectura **MVC (Modelo-Vista-Controlador)** en PHP.

## Contexto del Proyecto

Se te ha encargado desarrollar el panel de gestión para una pequeña empresa de alquiler de coches.
El proyecto ya cuenta con una base sólida para ahorrar tiempo:
- **Base de Datos**: SQLite (archivo `database/database.sqlite` ya generado con datos de prueba).
- **Conexión a la BBDD**: Ya configurada en `config/database.php` usando PDO.
- **Modelos**: Las clases `Car`, `Client` y `Rental` ya están completamente implementadas en la carpeta `models/` con todos los métodos necesarios para interactuar con la base de datos (consultar, insertar, actualizar).
- **Front Controller**: El archivo `index.php` en la raíz ya está programado para recibir peticiones y dirigirlas al controlador y método (acción) adecuado.
- **Vistas**: Tienes un layout base (`views/layout.php`) con PicoCSS integrado para que el diseño sea presentable sin esfuerzo adicional.

## Tu Tarea

Tu objetivo principal es **implementar la lógica de los Controladores y completar el código HTML/PHP de las Vistas**.

Abre los archivos de la carpeta `controllers/` y `views/` y busca los comentarios que empiezan con `TODO:`. Estos comentarios te guiarán paso a paso sobre lo que tienes que programar.

### Ejemplos provistos
Para ayudarte a entender cómo funciona el flujo, **el controlador `CarController` y las vistas `views/cars/index.php` y `views/cars/show.php` están completamente implementados**. 
Puedes usarlos como referencia para entender:
- Cómo instanciar un modelo.
- Cómo obtener datos de la base de datos.
- Cómo usar `ob_start()` y `require_once` para inyectar una vista específica dentro del `layout.php`.
- Cómo mostrar los datos dinámicos mediante bucles `foreach` y variables en las vistas.

### Casos de Uso a implementar:

1. **Gestión de Clientes (`ClientController` y `views/clients/`)**:
   - Listar todos los clientes en una tabla.
   - Formulario para añadir un nuevo cliente y procesamiento de ese formulario (`store`).

2. **Alta de Coches (`CarController` y `views/cars/`)**:
   - Formulario para añadir un nuevo coche y procesamiento de ese formulario (`store`).

3. **Gestión de Alquileres (`RentalController` y `views/rentals/`)**:
   - Listar el histórico de alquileres (activos y pasados).
   - Formulario para alquilar un coche (necesitarás cargar los clientes y los coches disponibles para los desplegables `<select>`).
   - Lógica para procesar la devolución de un coche (al pulsar un botón "Devolver" en la lista de alquileres, se debe llamar al método `returnCar` del controlador, que actualizará la base de datos marcando el alquiler como finalizado y el coche como disponible nuevamente).

## Instrucciones para ejecutar el proyecto en tu máquina

### Opción 1: Usando el servidor integrado de PHP (Recomendado)
Si tienes PHP instalado y configurado en tu variable de entorno (PATH), puedes arrancar un servidor local directamente desde la terminal, en la carpeta raíz del proyecto (`dam-exam-test`):

```bash
php -S localhost:8000
```
Luego, abre tu navegador web y visita: `http://localhost:8000`

### Opción 2: Usando WAMP / XAMPP
Si prefieres usar un entorno como WAMP o XAMPP:
1. Mueve o copia la carpeta entera de este proyecto (`dam-exam-test`) dentro del directorio público de tu servidor web:
   - En **WAMP**: habitualmente `C:\wamp64\www\`
   - En **XAMPP**: habitualmente `C:\xampp\htdocs\`
2. Asegúrate de que tu servidor Apache está arrancado en el panel de control de WAMP/XAMPP.
3. Abre tu navegador web y visita: `http://localhost/dam-exam-test` (o la ruta correspondiente si has renombrado la carpeta).

¡Mucha suerte! Revisa bien la sintaxis de PHP, cierra las etiquetas correctamente y verifica que los datos lleguen por `$_POST` o `$_GET` antes de usarlos.
