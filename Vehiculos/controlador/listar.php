<?php
include("../modelo/database.php");

$database = new Database();
$db = $database->getConnection();

if ($db === null) {
    die("Error: No se pudo conectar a la base de datos.");
}

$query = "SELECT * FROM vehiculo;";
$statemet = $db->prepare($query);
$statemet->execute();
$vehiculos = $statemet->fetchAll(PDO::FETCH_ASSOC);
