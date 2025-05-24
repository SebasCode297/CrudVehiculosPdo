<?php
include('header.php');
include('../controlador/listar.php');
?>
<link rel="stylesheet" href="estilo/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<div class="tabla-vehiculos-container">
    <h4 class="tabla-vehiculos-title">Vehículos Registrados</h4>
    <table class="tabla-vehiculos">
        <thead>
            <tr>
                <th>Placa</th>
                <th>Color</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($vehiculos as $vehiculo): ?>
            <tr>
                <td><?php echo htmlspecialchars($vehiculo['placa']); ?></td>
                <td><?php echo htmlspecialchars($vehiculo['color']); ?></td>
                <td><?php echo htmlspecialchars($vehiculo['marca']); ?></td>
                <td><?php echo htmlspecialchars($vehiculo['modelo']); ?></td>
                <td>
                    <img src="<?php echo htmlspecialchars($vehiculo['imagen']); ?>" alt="Imagen" class="tabla-vehiculos-img">
                </td>
                <td>
                    <a href="editar.php?id=<?php echo $vehiculo['id']; ?>" class="btn-accion btn-editar">Editar</a>
                    <a href="../controlador/eliminar.php?id=<?php echo $vehiculo['id']; ?>" class="btn-accion btn-eliminar"
                     onclick="return confirm('¿Estás seguro de que deseas eliminar este vehículo?');">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php
include('footer.php');
?>