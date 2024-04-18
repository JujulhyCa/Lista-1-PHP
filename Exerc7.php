<!-- 7. Faça um programa em PHP no qual leia um valor em metros e o converta em centímetros.-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão de Metros para Centímetros</title>
</head>
<body>
    <h2>Conversão de Metros para Centímetros</h2>
    <form method="post">
        <label>Digite o valor em metros:</label>
        <input type="number" name="metros" step="any">
        <button type="submit">Converter</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obter o valor em metros digitado pelo usuário
        $metros = $_POST["metros"];

        // Converter metros para centímetros (1 metro = 100 centímetros)
        $centimetros = $metros * 100;

        // Exibir o resultado
        echo "<p>$metros metro(s) equivale(m) a $centimetros centímetro(s)</p>";
    }
    ?>
</body>
</html>
