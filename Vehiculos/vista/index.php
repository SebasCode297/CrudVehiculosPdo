<?php
include("header.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Mundo</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Roboto:wght@300;400;700&display=swap">
    <link rel="stylesheet" href="./estilo/style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>
    <div class="container">
        <h1 class="titulo">Auto Mundo</h1>
        <div class="banner-container">
            <img class="banner" src="https://media.es.wired.com/photos/63bcb11d2984c2acd0305509/16:9/w_2560%2Cc_limit/CES-2023-PEUGEOT_INCEPTION_CONCEPT_2301CN202.jpg" 
            alt="Banner Auto Mundo">
        </div>
        <div class="content-spacer"></div>
        <div class="card">
            <div class="card-img-container">
                <img class="card-img" src="https://www.infobae.com/resizer/v2/4GSUPRZXXREO7A3YKFIT3W2RMM.jpg?auth=58823a8ab59fe5a67ed34f60ac35550ed9146c3ab36199f18f0b23cb73836b4f&smart=true&width=1200&height=900&quality=85" 
                alt="Bugatti">
            </div>
            <div class="card-body">
                <h5 class="card-title">Bugatti</h5>
                <p class="card-text">Auto super cómodo para millonarios</p>
            </div>
        </div>
    </div>
    <?php
    if (isset($_GET['mensaje'])) {
        $mensaje = $_GET['mensaje'];
        $titulo = '';
        $texto = '';
        $icono = '';

        switch ($mensaje) {
            case 'guardado':
                $titulo = '¡Éxito!';
                $texto = 'Vehículo guardado correctamente.';
                $icono = 'success';
                break;
            case 'error_guardado':
                $titulo = '¡Error!';
                $texto = 'Error al guardar el vehículo.';
                $icono = 'error';
                break;
            case 'actualizado':
                $titulo = '¡Éxito!';
                $texto = 'Vehículo actualizado correctamente.';
                $icono = 'success';
                break;
            case 'error_actualizado':
                $titulo = '¡Error!';
                $texto = 'Error al actualizar el vehículo.';
                $icono = 'error';
                break;
            case 'eliminado':
                $titulo = '¡Éxito!';
                $texto = 'Vehículo eliminado correctamente.';
                $icono = 'success';
                break;
            case 'error_eliminado':
                $titulo = '¡Error!';
                $texto = 'Error al eliminar el vehículo.';
                $icono = 'error';
                break;
        }

        if ($titulo && $texto && $icono) {
            echo "<script>
            Swal.fire({
                title: '$titulo',
                text: '$texto',
                icon: '$icono',
                confirmButtonText: 'Aceptar'
            }).then(() => {
                if (window.history.replaceState) {
                    const url = new URL(window.location);
                    url.searchParams.delete('mensaje');
                    window.history.replaceState({}, document.title, url.pathname);
                }
            });
        </script>";
        }
    }
    ?>
    
    <?php
    include("footer.php");
    ?>
</body>

</html>