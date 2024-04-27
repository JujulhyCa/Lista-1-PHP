<!-- 9. Faça um script PHP que receba de um formulário HTML5 uma variável com o ano de nascimento de
uma pessoa, crie uma constante com o ano atual, calcule e mostre:
a. a idade dessa pessoa em anos;
b. quantos dias esta pessoa já viveu;
c. quantos anos essa pessoa terá em 2025-->

<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Idade</title>
</head>
<body>

    <h2>Calculadora de Idade</h2>

    <form method="post" action="">
    Ano de Nascimento: <input type="number" name="ano_nascimento" required>
    <input type="submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recebe o ano de nascimento do formulário
        $ano_nascimento = $_POST['ano_nascimento'];

        // Obtém o ano atual
        $ano_atual = date("Y");

        // Calcula a idade
        $idade = $ano_atual - $ano_nascimento;

        // Calcula quantos dias a pessoa já viveu
        $dias_vividos = $idade * 365;

        // Calcula quantos anos a pessoa terá em 2025
        $idade_2025 = 2025 - $ano_nascimento;

        // Mostra os resultados
        echo "<h3>Resultados:</h3>";
        echo "<p>a. Idade: $idade anos</p>";
        echo "<p>b. Dias vividos: $dias_vividos dias</p>";
        echo "<p>c. Idade em 2025: $idade_2025 anos</p>";
    }
    ?>

</body>
</html>
