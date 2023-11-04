<!DOCTYPE html>
<html>
<head>
    <title>Cálculo da Área do Retângulo</title>
</head>
<body>
    <?php
    class Retangulo {
        private $ladoMaior;
        private $ladoMenor;

        public function setLadoMaior($ladoMaior) {
            $this->ladoMaior = $ladoMaior;
        }

        public function setLadoMenor($ladoMenor) {
            $this->ladoMenor = $ladoMenor;
        }

        public function calculaArea() {
            return $this->ladoMaior * $this->ladoMenor;
        }
    }

    $area = null;

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['calcula_area'])) {
        $ladoMaior = isset($_POST['lado_maior']) ? floatval($_POST['lado_maior']) : 0;
        $ladoMenor = isset($_POST['lado_menor']) ? floatval($_POST['lado_menor']) : 0;

        if ($ladoMaior > 0 && $ladoMenor > 0) {
            $retangulo = new Retangulo();
            $retangulo->setLadoMaior($ladoMaior);
            $retangulo->setLadoMenor($ladoMenor);
            $area = $retangulo->calculaArea();
        } else {
            echo "Os valores dos lados devem ser maiores que zero.";
        }
    }
    ?>

    <h1>Cálculo da Área do Retângulo</h1>

    <?php if ($area !== null) : ?>
        <p>A área do retângulo é: <?= $area ?></p>
    <?php else : ?>
        <form method="post">
            <label for="lado_maior">Lado Maior:</label>
            <input type="number" name="lado_maior" id="lado_maior" required step="0.01"><br>

            <label for="lado_menor">Lado Menor:</label>
            <input type="number" name="lado_menor" id="lado_menor" required step="0.01"><br>

            <input type="submit" name="calcula_area" value="Calcular Área">
        </form>
    <?php endif; ?>
</body>
</html>


