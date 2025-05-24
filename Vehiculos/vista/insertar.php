<?php
include("header.php");
?>
<link rel="stylesheet" href="estilo/style.css">
<div class="form-insert-container">
    <div class="form-card">
        <h2 class="form-title">
            <i class="fas fa-car"></i> Registrar Nuevo Vehículo
        </h2>
        <form action="../controlador/insertar.php" method="post" class="insert-form">
            <div class="form-group">
                <label for="placa" class="input-label">Placa</label>
                <div class="input-with-icon">
                    <i class="fas fa-id-card"></i>
                    <input type="text" name="placa" id="placa" placeholder="Ej: ABC-123" required>
                </div>
            </div>

            <div class="form-group">
                <label for="marca" class="input-label">Marca</label>
                <div class="input-with-icon">
                    <i class="fas fa-industry"></i>
                    <input type="text" name="marca" id="marca" placeholder="Ej: Toyota, Ford..." required>
                </div>
            </div>

            <div class="form-group">
                <label for="modelo" class="input-label">Modelo</label>
                <div class="input-with-icon">
                    <i class="fas fa-tag"></i>
                    <input type="text" name="modelo" id="modelo" placeholder="Ej: Corolla, Mustang..." required>
                </div>
            </div>

            <div class="form-group">
                <label for="color" class="input-label">Color</label>
                <div class="input-with-icon">
                    <i class="fas fa-palette"></i>
                    <input type="text" name="color" id="color" placeholder="Ej: Rojo, Azul..." required>
                </div>
            </div>

            <div class="form-group">
                <label for="imagen" class="input-label">Imagen (URL)</label>
                <div class="input-with-icon">
                    <i class="fas fa-image"></i>
                    <input type="text" name="imagen" id="imagen" placeholder="https://ejemplo.com/imagen.jpg" required>
                </div>
            </div>

            <button type="submit" class="submit-btn">
                <i class="fas fa-plus-circle"></i> Agregar Vehículo
            </button>
        </form>
    </div>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<?php
include("footer.php");
?>
