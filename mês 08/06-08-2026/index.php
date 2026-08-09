<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula - PHP</title>
</head>

<body>

    <main>

        <h1>Tratamento de Exceções</h1>

        <?php

        echo "<h3>Finalização de compra - MS Store</h3>";

        function processarPedido($produto, $preco, $quantidadeDesejada, $estoqueAtual, $cupom)
        {

            if (empty(trim($produto))) {
                throw new Exception("O nome do produto não pode ser enviado em branco.");
            }

            if ($quantidadeDesejada > $estoqueAtual) {
                throw new Exception(
                    "Estoque insuficiente para o item '$produto'! Você pediu $quantidadeDesejada unidade(s), mas só temos $estoqueAtual em estoque."
                );
            }

            $total = $preco * $quantidadeDesejada;

            if (trim(strtoupper($cupom)) === "MSCODE10") {

                $total *= 0.90;

                echo "Cupom <strong>MSCODE10</strong> aplicado! Você ganhou 10% de desconto.<br><br>";
            }

            return $total;
        }

        try {

            $item = "Teclado Gamer";
            $precoUnitario = 250.00;
            $quantidade = 2;
            $estoqueAtual = 5;
            $cupomCliente = "MSCODE10";

            echo "<p>Processando compra de <strong>$quantidade</strong> unidade(s) de <strong>$item</strong>...</p>";

            $totalPagar = processarPedido(
                $item,
                $precoUnitario,
                $quantidade,
                $estoqueAtual,
                $cupomCliente
            );

            echo "<strong>Sucesso!</strong> Pedido finalizado.<br>";
            echo "Total da compra: <strong>R$ " . number_format($totalPagar, 2, ",", ".") . "</strong>";
        } catch (Exception $exception) {

            echo "<strong>Erro:</strong> " . $exception->getMessage();
        }

        ?>

    </main>

</body>

</html>