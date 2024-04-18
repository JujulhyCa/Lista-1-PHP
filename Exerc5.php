<!--5. Crie um algoritmo que solicite um número, faça o cálculo fatorial e exiba o resultado na tela. 
Ex: Entrada = 3 
Processamento: (3 * 2) * 1 
Saída: 6 -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo Fatorial</title>
</head>
<body>
    <h2>Cálculo Fatorial</h2>
    <form method="post">
        <label>Digite um número:</label>
        <input type="number" name="numero">
        <button type="submit">Calcular Fatorial</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obter o número digitado pelo usuário
        $numero = $_POST["numero"];

        // Inicializar o fatorial como 1
        $fatorial = 1;

        // Calcular o fatorial usando um loop for
        for ($i = 1; $i <= $numero; $i++) {
            $fatorial *= $i;
        }

        // Exibir o resultado
        echo "<p>O fatorial de $numero é: $fatorial</p>";
    }
    ?>

</body>
</html>
