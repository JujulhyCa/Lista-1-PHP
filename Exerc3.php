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
    <?php
    // Defina os valores de entrada
    $valor1 = 5;
    $valor2 = 5;

    // Calcule a soma dos valores de entrada
    $soma = $valor1 + $valor2;

    // Verifique se os valores são iguais e retorne o resultado correspondente
    $resultado = ($valor1 == $valor2) ? $soma * 3 : $soma;
    ?>
    
    <p>O resultado é: <?php echo $resultado; ?></p>
</body>
</html>
