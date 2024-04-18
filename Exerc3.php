<!--3. Escreva um programa para calcular a soma dos dois valores de entrada. Se os dois valores forem 
iguais, retorne o triplo da soma.-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Soma</title>
</head>
<body>
    <h2>Calculadora de Soma</h2>
        <form method="post">
            <label>Informe o primeiro valor:</label>
            <input type="number" name="valor1"><br>
            <label>Informe o segundo valor:</label>
            <input type="number" name="valor2"><br>
            <button type="submit">Calcular</button>
        </form>
        <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obter os valores de entrada do formulário e convertê-los para números inteiros
        $valor1 = intval($_POST["valor1"]);
        $valor2 = intval($_POST["valor2"]);

        // Calcular a soma dos valores de entrada
        $soma = $valor1 + $valor2;

       // Verifique se os valores são iguais
        if ($valor1 == $valor2) {
            // Se forem iguais, retorne o triplo da soma
            $resultado = $soma * 3;
        } else {
            // Se não forem iguais, retorne apenas a soma
            $resultado = $soma;
        }

        // Exibir o resultado
        echo "<p>O resultado é: $resultado</p>";
    }
    ?>
</body>
</html>
