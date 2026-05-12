<!-- ESQUELETO -->
<article>
    <header>
        <h2>Listado de Clientes</h2>
    </header>
    
    <div class="grid">
        <div>
            <a href="index.php?controller=client&action=create" role="button">Añadir Nuevo Cliente</a>
        </div>
    </div>

    <table class="striped mt-4">
        <thead>
            <tr>
                <th>DNI</th>
                <th>Nombre</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <!-- TODO: Hacer un bucle foreach sobre la variable $clients -->
            <!-- TODO: Mostrar los datos de cada cliente en las columnas -->
        </tbody>
    </table>
</article>
