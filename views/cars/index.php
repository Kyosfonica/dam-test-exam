<!-- VISTA DE EJEMPLO: Completamente implementada -->
<article>
    <header>
        <h2>Listado de Coches</h2>
    </header>
    
    <div class="grid">
        <div>
            <a href="index.php?controller=car&action=create" role="button">Añadir Nuevo Coche</a>
        </div>
        <div>
            <form action="index.php" method="GET" style="margin-bottom: 0;">
                <input type="hidden" name="controller" value="car">
                <input type="hidden" name="action" value="index">
                <fieldset role="group">
                    <input type="search" name="search" placeholder="Buscar por marca..." value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
                    <input type="submit" value="Buscar">
                </fieldset>
            </form>
        </div>
    </div>

    <table class="striped mt-4">
        <thead>
            <tr>
                <th>Matrícula</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cars as $car): ?>
                <tr>
                    <td><?php echo htmlspecialchars($car['plate']); ?></td>
                    <td><?php echo htmlspecialchars($car['brand']); ?></td>
                    <td><?php echo htmlspecialchars($car['model']); ?></td>
                    <td>
                        <?php if ($car['is_available']): ?>
                            <span class="is-available">Disponible</span>
                        <?php else: ?>
                            <span class="not-available">Alquilado</span>
                        <?php endif; ?>
                    </td>
                    <td>
                        <a href="index.php?controller=car&action=show&id=<?php echo $car['id']; ?>">Ver detalles</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            
            <?php if (empty($cars)): ?>
                <tr>
                    <td colspan="5" class="text-center">No hay coches registrados.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</article>
