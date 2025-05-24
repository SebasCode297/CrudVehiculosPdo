<?php
include("header.php");
include("../controlador/listar.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM vehiculo WHERE id = :id";
    $statemet = $db->prepare($query);
    $statemet->bindParam(':id', $id, PDO::PARAM_INT);
    $statemet->execute();
    $vehiculo = $statemet->fetch(PDO::FETCH_ASSOC);
} else {
    echo "ID no proporcionado.";
    exit;
}
?>

<link rel="stylesheet" href="estilo/style.css">
<div class="edv-container">
    <div class="edv-card">
        <h2 class="edv-title">Actualizar Vehículo</h2>

        <form action="../controlador/actualizar.php" method="post">
            <input type="hidden" name="id" value="<?php echo $vehiculo['id']; ?>">

            <div class="edv-form-group">
                <label for="placa" class="edv-input-label">Número de Placa</label>
                <input type="text" class="edv-form-input" name="placa" id="placa"
                    value="<?php echo $vehiculo['placa']; ?>" required>
            </div>

            <div class="edv-form-group">
                <label for="marca" class="edv-input-label">Marca del Vehículo</label>
                <input type="text" class="edv-form-input" name="marca" id="marca"
                    value="<?php echo $vehiculo['marca']; ?>" required>
            </div>

            <div class="edv-form-group">
                <label for="modelo" class="edv-input-label">Modelo</label>
                <input type="text" class="edv-form-input" name="modelo" id="modelo"
                    value="<?php echo $vehiculo['modelo']; ?>" required>
            </div>

            <div class="edv-form-group">
                <label for="color" class="edv-input-label">Color Principal</label>
                <input type="text" class="edv-form-input" name="color" id="color"
                    value="<?php echo $vehiculo['color']; ?>" required>
            </div>

            <div class="edv-form-group">
                <label for="imagen" class="edv-input-label">URL de Fotografía</label>
                <input type="text" class="edv-form-input" name="imagen" id="imagen"
                    value="<?php echo $vehiculo['imagen']; ?>" required>
            </div>

            <button type="submit" class="edv-submit-btn">Guardar Cambios</button>
        </form>
    </div>
</div>

<?php
include("footer.php");
?>