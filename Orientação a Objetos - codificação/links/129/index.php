<!DOCTYPE html>
<html>
<head>
    <title>Sequência de Números</title>
</head>
<body>
    <h1>Sequência de Números</h1>

    <form method="post" action="sequenci0.php">
        <label for="inicio">Selecione o valor inicial:</label>
        <select name="inicio" id="inicio">
            <?php
            for ($i = 1; $i <= 100; $i++) {
                echo "<option value='$i'>$i</option>";
            }
            ?>
        </select>
        <label for="fim">Selecione o valor final:</label>
        <select name="fim" id="fim">
            <?php
            for ($i = 1; $i <= 100; $i++) {
                echo "<option value='$i'>$i</option>";
            }
            ?>
        </select>
        <input type="submit" value="Mostrar">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $inicio = isset($_POST['inicio']) ? intval($_POST['inicio']) : 1;
        $fim = isset($_POST['fim']) ? intval($_POST['fim']) : 1;

        if ($inicio <= $fim) {
            echo "<h2>Sequência de Números de $inicio a $fim:</h2>";
            for ($i = $inicio; $i <= $fim; $i++) {
                echo $i . "<br>";
            }
        } else {
            echo "O valor de início deve ser menor ou igual ao valor final.";
        }
    }
    ?>
</body>
</html>
