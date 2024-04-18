<!--8. Faça um programa em PHO para uma loja de tintas. O programa deverá pedir o tamanho em metros 
quadrados da área a ser pintada. Considere que a cobertura da tinta é de 1 litro para cada 3 metros 
quadrados e que a tinta é vendida em latas de 18 litros, que custam R$ 80,00. Informe ao usuário a 
quantidades de latas de tinta a serem compradas e o preço total.-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Tinta</title>
</head>
<body>
    <h2>Calculadora de Tinta</h2>
    <form method="post">
        <label>Digite o tamanho da área a ser pintada (em metros quadrados):</label>
        <input type="number" name="area" step="any">
        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obter o tamanho da área digitado pelo usuário
        $area = $_POST["area"];

        // Calcular a quantidade de litros de tinta necessários
        $litros_tinta = $area / 3;

        // Calcular a quantidade de latas de tinta necessárias (considerando latas de 18 litros)
        $latas_tinta = ceil($litros_tinta / 18);
        /*Com a função "ceil()" envolvendo o cálculo da quantidade de latas de tinta, estamos garantindo que 
        mesmo se o número de latas necessário for um decimal, ele será arredondado para cima para garantir 
        que tenhamos pelo menos a quantidade necessária de tinta.*/

        // Calcular o preço total das latas de tinta
        $preco_total = $latas_tinta * 80;

        // Exibir o resultado
        echo "<p>Para pintar uma área de $area metro(s) quadrado(s), você precisará de $latas_tinta lata(s) de tinta.</p>";
        echo "<p>O preço total a ser pago será de R$ $preco_total.</p>";
    }
    ?>
</body>
</html>
