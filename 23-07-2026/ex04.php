<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <main>
        <h1>Loops - FOREACH</h1>
        <h2>Seu Carrinho de Compras - MSCODE</h2>
        <div>
        <?php
            $carrinho = [
                "Notebook" => 4500.00,
                "Mouse sem Fio" => 120.00,
                "Teclado" => 350.00,
                "Monitor" => 900.00,
            ];

            $totalCompra = 0;

            echo "<h3>Itens Adicionados</h3>";

            echo "<ul>";

            foreach($carrinho as $produto => $preço) {
                echo "<li> $produto: R$ $preço </li>";

            $totalCompra = $totalCompra + $preço;
        }

        echo "<strong> Total a Pagar: $totalCompra</strong>";
        
        ?>
        </div>
    </main>
</body>
</html>