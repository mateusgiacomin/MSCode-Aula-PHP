<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orçamento para Compras</title>
</head>

<body>
    <main>
        <h1>MSCODE-SHOP</h1>
            <?php

            //VARIAVEIS
            $nome = 'Mateus';
            $orcamento = 5000.00;
            $cupom = 'CUPOM20';
            const TAXA_CONVENIENCIA = 45.00;

            function parsePrice($price) {
                return floatval(preg_replace('/[^\d\.]/', '', $price));
            }

                echo "<h2> Resultado </h2>";
                echo "Seja bem-vindo " . $nome . "!<br>";
                echo "Seu orçamento é de: R$ " . number_format($orcamento, 2, ',', '.') . "<br>";
                echo "Seu cupom é de: R$ " . htmlspecialchars($cupom) . "<br>";

            //array catalogo
            $catalogo = [
                "Hardware" => [
                    ['nome' => 'Notebook', 'preco' => 'R$ 10000.00', 'estoque' => '50un'],
                    ['nome' => 'Computador', 'preco' => 'R$ 8.0000.00', 'estoque' => '40un'],
                ],
                "Softwares" => [
                    ['nome' => 'Pacote Office', 'preco' => 'R$ 500', 'estoque' => '100un'],
                    ['nome' => 'Antivirus', 'preco' => 'R$200', 'estoque' => '100un'],
                ],
            ];
            
            $carrinhoFinal = [];
            $totalGasto = 0;

            echo "<h3> Olá $nome, Encontramos esses itens dentro do seu orçamento: </h3><ul>";
            
            // foreach para realizar a separação de cada item do array
            foreach ($catalogo as $departamento => $listaProdutos) {
               foreach ($listaProdutos as $produto) {
                   $estoque = intval($produto['estoque']);
                   if ($estoque === 0) {
                       continue;
                   }

                   if($produto ['preco'] <= $orcamento && $produto['estoque'] > 0){
                   $orcamento -= $produto['preco'];
                   $totalGasto += $produto ['preco'];

                   $carrinhoFinal[] = $produto['nome'] . "(". $departamento . ")";
                   echo "<li>" . $produto['nome'] . " - " . $produto['preco'] . "</li>";
                   }
               }
            }
            
            echo "</ul>";
            echo "<h3>Total gasto: R$ " . number_format($totalGasto, 2, ',', '.') . "</h3>";
            echo "<h3>Orçamento restante: R$ " . number_format($orcamento, 2, ',', '.') . "</h3>";
            
            ?>
    </main>
</body>

</html>