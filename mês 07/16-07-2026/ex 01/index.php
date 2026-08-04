<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>AULA PHP</title>
</head>

<body>
    <main>
        <h1>MSCODE - AULA 02</h1>
    <?php
    const NOME_EMPRESA = 'SIMONETTI';
    $nome = 'joão';

    $teclado = 150.50;
    $mouse = 70.50;
    $frete = 300.50;
    $disponivel = true;

    $subTotal = $teclado + $mouse;
    $desconto = 0.15;

    $total = $subTotal - $desconto + $frete; 

    echo "O subtotal da compra é: R$ $subTotal <br>";
    echo "O valor do frete é: R$ $frete <br>";
    echo "O valor do desconto é: R$ $desconto <br>";
    echo "O valor total da compra é: R$ $total <br>";
    ?>
    </main>
</body>

</html>