<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
</head>
<body>
    <form action="" method="post">  <!--action vazio chama a mesma página-->
        <label>Informe um valor:</label>
        <input type="number" name="valor">
        <button type="submit">Enviar</button>

        <?php

            $valor = $_POST['valor'];

            if($valor > 0)
                echo "Valor positivo.";
            elseif($valor < 0)
                echo "Valor negativo.";
            else    
                echo "Valor igual a zero!";
        ?>

    </form>

</body>
</html>

