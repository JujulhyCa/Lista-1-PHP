<!--4. Crie um algoritmo que solicite a entrada de um número, e exiba a tabuada de 0 a 10 de acordo com 
o número solicitado, ex: 
Entrada = 4
Saída = 4 X 0 = 0...4 X 10 = 40.-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
    <h2>Tabuada</h2>
    <form method="post">
        <label>Digite um número:</label>
        <input type="number" name="numero">
        <button type="submit">Mostrar Tabuada</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obter o número digitado pelo usuário
        $numero = $_POST["numero"];

        // Exibir a tabuada do número de 0 a 10
        echo "<h3>Tabuada do $numero:</h3>";
        for ($i = 0; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "$numero x $i = $resultado <br>";
        }
    }
    ?>
</body>
</html>
