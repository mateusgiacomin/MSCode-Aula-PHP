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
        <h2>A Busca no Catálogo - MSCODE</h2>
        <div>
            <?php
            $catalogo = [
                "Eletronicos" => ['Mouse', 'Teclado', 'Monitor'],
                "Móves" => ['Mesa', 'Cadeira', 'Sofá'],
                "Roupas" => ['Camiseta', 'Calça', 'Jaqueta'],
            ];

            $produtoBuscado = 'Cadeira';
            $produtoEncontrado = false;

            foreach ($catalogo as $categoria => $produtos) {
                if ($produtoEncontrado) {
                    break;
                }

                echo "<h3> Buscando na categoria: $categoria</h3>";

                foreach ($produtos as $produto) {
                    echo "Checando item: $produto<br>";

                    if ($produto === $produtoBuscado) {
                        echo "<p><strong> \u{1F3AF} Produto '$produto' encontrado!</strong></p>";
                        $produtoEncontrado = true;
                        break;
                    }
                }
            }

            if (!$produtoEncontrado) {
                echo "<p>Produto não encontrado.</p>";
            }
            ?>
        </div>
    </main>
</body>

</html>