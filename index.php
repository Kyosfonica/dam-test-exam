<?php
// Incluir la cabecera (esto inicia la sesión y pinta el menú superior)
require_once __DIR__ . '/includes/header.php';
?>

<!-- VISTA DE EJEMPLO: Completamente implementada -->
<article>
    <header>
        <h2>Flota de Coches</h2>
    </header>

    <h3>Coches Disponibles para Alquilar</h3>
    <table class="striped">
        <thead>
            <tr>
                <th>Matrícula</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $hay_disponibles = false;
            foreach ($_SESSION['cars'] as $id => $car):
                if ($car['available']):
                    $hay_disponibles = true;
                    ?>
                    <tr>
                        <td><?php echo htmlspecialchars($car['plate']); ?></td>
                        <td><?php echo htmlspecialchars($car['brand']); ?></td>
                        <td><?php echo htmlspecialchars($car['model']); ?></td>
                        <td>
                            <!-- NOTA: En el examen tendréis que programar lógicas condicionales como esta para mostrar u ocultar elementos. -->
                            <?php if ($client_name): ?>
                                <!-- Si está identificado, puede alquilar -->
                                <a href="rent.php?id=<?php echo $id; ?>" role="button" class="outline">Alquilar</a>
                            <?php else: ?>
                                <!-- Si no está identificado, le pedimos que inicie sesión -->
                                <small><a href="login.php">Identifícate para alquilar</a></small>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php
                endif;
            endforeach;

            if (!$hay_disponibles):
                ?>
                <tr>
                    <td colspan="4" class="text-center">No hay coches disponibles en este momento.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</article>

<?php if ($client_name): ?>
    <article>
        <header>
            <h2>Mis Alquileres (<?php echo htmlspecialchars($client_name); ?>)</h2>
        </header>
        <table class="striped">
            <thead>
                <tr>
                    <th>Matrícula</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $hay_alquilados = false;
                foreach ($_SESSION['cars'] as $id => $car):
                    // Comprobamos si el coche no está disponible y está alquilado por ESTE cliente (usando la cookie)
                    if (!$car['available'] && $car['rented_by'] === $client_name):
                        $hay_alquilados = true;
                        ?>
                        <tr>
                            <td><?php echo htmlspecialchars($car['plate']); ?></td>
                            <td><?php echo htmlspecialchars($car['brand']); ?></td>
                            <td><?php echo htmlspecialchars($car['model']); ?></td>
                            <td>
                                <!-- TODO en return.php: Implementar la lógica para devolver -->
                                <a href="return.php?id=<?php echo $id; ?>" role="button" class="outline secondary">Devolver</a>
                            </td>
                        </tr>
                        <?php
                    endif;
                endforeach;

                if (!$hay_alquilados):
                    ?>
                    <tr>
                        <td colspan="4" class="text-center">No tienes ningún coche alquilado.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </article>
<?php endif; ?>

<?php
// Incluir el pie de página
require_once __DIR__ . '/includes/footer.php';
?>