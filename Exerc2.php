<!-- 2. Escreva um programa que leia 7 números diferentes, imprima o menor valor e imprima a posição do
menor valor na sequência de entrada. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <label>Informe 7 números diferentes:</label>
        <input type="number" name="valor1">
        <input type="number" name="valor2">
        <input type="number" name="valor3">
        <input type="number" name="valor4">
        <input type="number" name="valor5">
        <input type="number" name="valor6">
        <input type="number" name="valor7">
        <button type="submit" >Enviar</button>

        <?php
            $valor = $_POST['valor1'];
            $menor = $valor;
            $aux = 1;

            if($menor <= $valor2){
                $menor = $valor2;
                $aux = 2;
            } elseif($menor <= $valor3){ 
                $valor = $valor3;
                $aux = 3;      
            } elseif($menor <= $valor4){
                $valor = $valor4;
                $aux = 4;
            } elseif($menor <= $valor5){
                $valor = $valor5;
                $aux = 5;
            } elseif($menor <= $valor6){
                $valor = $valor6;
                $aux = 6;
            } else{
                $valor = $valor7;
                $aux = 7;
            }

            echo "$menor é o menor valor, na posição $aux.";
        ?>
    <form>

</body>
</html>