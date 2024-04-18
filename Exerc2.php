<!-- 2. Escreva um programa que leia 7 números diferentes, imprima o menor valor e imprima a posição do
menor valor na sequência de entrada. -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encontrar o Menor Valor</title>
</head>
<body>
    <h2>Encontrar o Menor Valor</h2>
    <form action="" method="post">
        <label>Informe 7 números diferentes:</label><br>
        <?php for ($i = 1; $i <= 7; $i++): ?>
            <input type="number" name="valor<?php echo $i; ?>"><br>
        <?php endfor; ?>
        <button type="submit">Enviar</button>
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valores = array();

        for ($i = 1; $i <= 7; $i++) {
            if (isset($_POST["valor$i"])) {
                $valores[] = $_POST["valor$i"];
            }
        }

        if (!empty($valores)) {
            $menor = min($valores);
            $posicao = array_search($menor, $valores) + 1;
            echo "O menor valor é $menor, na posição $posicao.";
        } else {
            echo "Por favor, preencha todos os campos.";
        }
    }
    ?>
</body>
</html>
