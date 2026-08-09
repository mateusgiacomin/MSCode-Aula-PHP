<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main>
        <h1>MS-CODE</h1>

        <h2>Funções</h2>
        <div>
            <?php
            //Lidar com números aleatórios, moedas e exibição de datas. Funlçoies utilizadas: rand(), number_format(), date().
            echo "<h3> Roleta de CashBack e Recibo</h3>";

            $dataHoje = date("d/m/Y H:i:s");

            echo "<p> Data e Hora da consulta:
         <strong> $dataHoje </strong></p>";

            $descontoSorteado = rand(5, 25);

            $valorCompra = 450.00;

            $valorDesconto = $valorCompra *
                ($descontoSorteado / 100);


            $valorFinal = $valorCompra - $valorDesconto;

            $compraFormatada = formatarMoeda($valorCompra);

            $descontoFormatado = formatarMoeda($valorDesconto);

            $finalFormatado = formatarMoeda($valorFinal);

            echo "Valor Original: R$ $compraFormatada <br>";
            echo "Desconto Aplicado: R$ $descontoFormatado </br>";
            echo "<h3> Total a Pagar: R$ $finalFormatado </h3>";

            function formatarMoeda(float $valor)
            {
                return "R$" . number_format($valor, 2, ',', '.');
            }

            ?>
        </div>
    </main>
</body>

</html>