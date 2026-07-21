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
    const NOME_EMPRESA = 'SIMONETTI_PIZZAS';

    $valorPizza = 90.00;
    $valorRefri = 15.00;
    $totalAmigos = 4;
    $totalFatias = 10;

    $contaTotal = ($valorPizza + $valorRefri) * 1.10;

    $valorPorAmigo = $contaTotal / $totalAmigos;

    $fatiasPorAmigos = $totalFatias / $totalAmigos;

    $fatiasQueSobraram = $totalFatias % $totalAmigos;

    echo "<h2>" .NOME_EMPRESA. "<h2>";
    echo "O valor total da conta é: R$ $contaTotal <br>";
    echo "O valor qu cada amigo irá pagar é: R$ $valorPorAmigo <br>";
    echo "Cada amigo vai comer $fatiasPorAmigos fatias <br>";
    echo "Sobraram um total de $fatiasQueSobraram fatias <br>";
    ?>
    </main>
</body>

</html>