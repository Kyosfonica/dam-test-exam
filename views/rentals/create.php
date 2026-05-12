<!-- ESQUELETO -->
<article>
    <header>
        <h2>Alquilar un Coche</h2>
    </header>
    
    <!-- TODO: Crear formulario con método POST apuntando a index.php?controller=rental&action=store -->
    <!-- Campos necesarios: client_id (select), car_id (select) -->
    
    <form action="" method="">
        
        <label for="client_id">Cliente:</label>
        <select name="client_id" id="client_id" required>
            <option value="">Selecciona un cliente</option>
            <!-- TODO: Bucle foreach sobre $clients para crear los <option> -->
            <!-- Ejemplo: <option value="1">Juan Perez</option> -->
        </select>

        <label for="car_id">Coche (sólo disponibles):</label>
        <select name="car_id" id="car_id" required>
            <option value="">Selecciona un coche</option>
            <!-- TODO: Bucle foreach sobre $cars para crear los <option>. Ojo, sólo mostrar los que is_available == 1 -->
            <!-- Ejemplo: <option value="1">Toyota Corolla - 1234ABC</option> -->
        </select>

        <input type="submit" value="Registrar Alquiler">
    </form>

    <footer>
        <a href="index.php?controller=rental&action=index" class="secondary">Cancelar</a>
    </footer>
</article>
