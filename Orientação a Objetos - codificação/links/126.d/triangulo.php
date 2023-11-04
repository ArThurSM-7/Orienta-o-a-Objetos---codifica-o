<?php
class Triangulo {
    private $base;
    private $altura;

    public function setBase($base) {
        $this->base = $base;
    }

    public function setAltura($altura) {
        $this->altura = $altura;
    }

    public function calculaArea() {
        return 0.5 * $this->base * $this->altura;
    }
}

$triangulo = new Triangulo();
$triangulo->setBase(8.0); 
$triangulo->setAltura(6.0); 
$area = $triangulo->calculaArea(); 

echo "Área do triângulo: " . $area . PHP_EOL;
?>

