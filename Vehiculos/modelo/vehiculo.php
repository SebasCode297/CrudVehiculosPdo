<?php
class Vehiculo {
    private $placa;
    private $color;
    private $marca;
    private $modelo;
    private $imagen;

    public function getImagen() { return $this->imagen; }
    public function getPlaca() { return $this->placa; }
    public function getMarca() { return $this->marca; }
    public function getModelo() { return $this->modelo; }
    public function getColor() { return $this->color; }

    public function setImagen($imagen) { $this->imagen = $imagen; }
    public function setPlaca($placa) { $this->placa = $placa; }
    public function setMarca($marca) { $this->marca = $marca; }
    public function setModelo($modelo) { $this->modelo = $modelo; }
    public function setColor($color) { $this->color = $color; }

    public function mostrarDetalle() {
        echo "Placa: " . $this->placa . ", Marca: " . $this->marca . ", Modelo: " . $this->modelo . ", Color: " . $this->color;
    }
}
?>

