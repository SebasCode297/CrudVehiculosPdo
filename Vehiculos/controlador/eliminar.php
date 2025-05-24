<?php
include("../modelo/database.php");
$database = new Database();
$db = $database->getConnection();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM vehiculo WHERE id = :id";
    $statemet = $db->prepare($query);
    $statemet->bindParam(':id', $id, PDO::PARAM_INT);

    if ($statemet->execute()) {
    header("Location: ../vista/index.php?mensaje=eliminado");
    exit();
} else {
    header("Location: ../vista/index.php?mensaje=error_eliminado");
    exit();
}

} else {
    echo "ID no proporcionado.";
}
?>
