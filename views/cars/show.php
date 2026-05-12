<!-- VISTA DE EJEMPLO: Completamente implementada -->
<article>
    <header>
        <h2>Detalles del Coche</h2>
    </header>
    
    <div>
        <p><strong>ID:</strong> <?php echo $car['id']; ?></p>
        <p><strong>Matrícula:</strong> <?php echo htmlspecialchars($car['plate']); ?></p>
        <p><strong>Marca:</strong> <?php echo htmlspecialchars($car['brand']); ?></p>
        <p><strong>Modelo:</strong> <?php echo htmlspecialchars($car['model']); ?></p>
        <p><strong>Estado:</strong> 
            <?php if ($car['is_available']): ?>
                <span class="is-available">Disponible para alquilar</span>
            <?php else: ?>
                <span class="not-available">Actualmente alquilado</span>
            <?php endif; ?>
        </p>
    </div>

    <footer>
        <a href="index.php?controller=car&action=index" role="button" class="secondary">Volver al listado</a>
    </footer>
</article>
