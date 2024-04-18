<!-- 10. Crie uma página em HTML5 na qual a pessoa possa digitar seu peso e sua altura e um programa PHP 
para o cálculo do IMC da pessoa. Defina se a pessoa está acima ou abaixo do peso. Procure referências 
sobre este índice (o que é considerado normal, abaixo ou acima do peso). Inclua a referência (página 
de acesso) para que a pessoa leia sobre este assunto -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMC</title>
</head>
<body>
    <h2>Calculadora de IMC</h2>
    <form action="" method="post">
        Peso (kg): <input type="number" step="0.01" name="peso" required><br><br>
        Altura (m): <input type="number" step="0.01" name="altura" required><br><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recebe peso e altura do formulário
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];

        // Calcula o IMC
        $imc = $peso / ($altura * $altura);

        // Exibe o IMC
        echo "<h3>Seu IMC é: " . number_format($imc, 2) . "</h3>";

        // Verifica a categoria do IMC
        if ($imc < 18.5) {
            echo "<p>Você está abaixo do peso.</p>";
        } elseif ($imc >= 18.5 && $imc <= 24.9) {
            echo "<p>Você está dentro do peso normal.</p>";
        } elseif ($imc >= 25 && $imc <= 29.9) {
            echo "<p>Você está acima do peso.</p>";
        } else {
            echo "<p>Você está com obesidade.</p>";
        }

        // Link para referência sobre IMC
        echo "<p>Para mais informações sobre o Índice de Massa Corporal, acesse:<a href='https://www.bbc.com/portuguese/geral-46311722#:~:text=A%20f%C3%B3rmula%20do%20IMC%20divide,24%2C9%20t%C3%AAm%20peso%20normal.' target='_blank'>
            IMC: Qual é seu Índice de Massa Corporal e o que isso significa para sua saúde?</a>.</p>";
    }
    ?>
</body>
</html>
