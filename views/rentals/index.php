<!-- ESQUELETO -->
<article>
    <header>
        <h2>Listado de Alquileres</h2>
    </header>
    
    <div class="grid">
        <div>
            <a href="index.php?controller=rental&action=create" role="button">Alquilar Coche</a>
        </div>
    </div>

    <table class="striped mt-4">
        <thead>
            <tr>
                <th>Cliente</th>
                <th>Coche</th>
                <th>Fecha Alquiler</th>
                <th>Fecha Devolución</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <!-- TODO: Hacer un bucle foreach sobre la variable $rentals -->
            <!-- TODO: Mostrar los datos (client_name, brand, model, plate, rent_date, return_date) -->
            <!-- TODO: Si return_date es NULL, mostrar un botón/enlace para devolver el coche -->
            <!-- Ejemplo del enlace de devolución: <a href="index.php?controller=rental&action=returnCar&id=...&car_id=...">Devolver</a> -->
        </tbody>
    </table>
</article>
