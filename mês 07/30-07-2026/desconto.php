<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php 
            function calcularDesconto(
                int $precoOriginal,
                int $porcentagemDesconto
            ) {
                $valorDesconto = $precoOriginal * ($porcentagemDesconto / 100);

                $precoFinal = $precoOriginal - $valorDesconto;

                return $precoFinal;
            }

            function formatarMoeda(float $valor)
            {
                    return "R$" . number_format($valor, 2, ',', '.');
            }

            $precoItem = 250.00;

            $cupom = 20; //20% de desconto

            $valorComDesconto = calcularDesconto($precoItem, $cupom);

            $precoFormatado = formatarMoeda($valorComDesconto);

            echo "Preço do Produto: " . formatarMoeda($precoItem) . "<br>";

            echo "Desconto Aplicado: $cupom%";

            echo "<h3> Total a Pagar: $precoFormatado </h3>";

        ?>
    </div>
</body>
</html>