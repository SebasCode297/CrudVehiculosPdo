<?php
include("../modelo/database.php");
$database = new Database();
$db = $database->getConnection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $placa = $_POST['placa'];
    $color = $_POST['color'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $imagen = $_POST['imagen'];

    $query = "UPDATE vehiculo SET placa = :placa, color = :color, marca = :marca, modelo = :modelo, imagen = :imagen WHERE id = :id";
    $statemet = $db->prepare($query);

    $statemet->bindParam(':placa', $placa, PDO::PARAM_STR);
    $statemet->bindParam(':color', $color, PDO::PARAM_STR);
    $statemet->bindParam(':marca', $marca, PDO::PARAM_STR);
    $statemet->bindParam(':modelo', $modelo, PDO::PARAM_STR);
    $statemet->bindParam(':imagen', $imagen, PDO::PARAM_STR);
    $statemet->bindParam(':id', $id, PDO::PARAM_INT);
    if ($statemet->execute()) {
        header("Location: ../vista/index.php?mensaje=actualizado");
        exit();
    } else {
        header("Location: ../vista/index.php?mensaje=error_actualizado");
        exit();
    }
}
