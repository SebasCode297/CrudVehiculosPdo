<?php
include("../modelo/database.php");
include("../modelo/vehiculo.php");

$database = new Database();
$db = $database->getConnection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $vehiculo = new Vehiculo();
    $vehiculo->setPlaca($_POST['placa']);
    $vehiculo->setColor($_POST['color']);
    $vehiculo->setMarca($_POST['marca']);
    $vehiculo->setModelo($_POST['modelo']);
    $vehiculo->setImagen($_POST['imagen']);

    $query = "INSERT INTO vehiculo (placa, color, marca, modelo, imagen) VALUES (:placa, :color, :marca, :modelo, :imagen);";
    $statemet = $db->prepare($query);

    $placa = $vehiculo->getPlaca();
    $color = $vehiculo->getColor();
    $marca = $vehiculo->getMarca();
    $modelo = $vehiculo->getModelo();
    $imagen = $vehiculo->getImagen();

    $statemet->bindParam(':placa', $placa, PDO::PARAM_STR);
    $statemet->bindParam(':color', $color, PDO::PARAM_STR);
    $statemet->bindParam(':marca', $marca, PDO::PARAM_STR);
    $statemet->bindParam(':modelo', $modelo, PDO::PARAM_STR);
    $statemet->bindParam(':imagen', $imagen, PDO::PARAM_STR);

    if ($statemet->execute()) {
        header("Location: ../vista/index.php?mensaje=guardado");
        exit();
    } else {
        header("Location: ../vista/index.php?mensaje=error_guardado");
        exit();
    }
}
