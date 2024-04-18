<!-- 6. Faça um algoritmo PHP que receba os valores A e B, imprima-os em ordem crescente em relação aos 
seus valores. Caso os valores sejam iguais, informar o usuário e imprimir o valor em tela apenas uma 
vez.
Exemplo, para A=5, B=4 você deve imprimir na tela: "4 5".
 para A=5, B=5 você deve imprimir na tela: “Números iguais: 5”-->

 <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordem Crescente</title>
</head>
<body>
    <h2>Ordem Crescente</h2>
    <form method="post">
        <label>Digite o valor de A:</label>
        <input type="number" name="valorA"><br>
        <label>Digite o valor de B:</label>
        <input type="number" name="valorB"><br>
        <button type="submit">Ordenar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obter os valores digitados pelo usuário
        $valorA = $_POST["valorA"];
        $valorB = $_POST["valorB"];

        // Verificar se os valores são iguais
        if ($valorA == $valorB) {
            echo "<p>Números iguais: $valorA</p>";
        } else {
            // Ordenar os valores em ordem crescente
            if ($valorA < $valorB) {
                echo "<p>$valorA $valorB</p>";
            } else {
                echo "<p>$valorB $valorA</p>";
            }
        }
    }
    ?>
</body>
</html>
