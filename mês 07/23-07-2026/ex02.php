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
        <h1>LOOPS - Do While</h1>
        <h2>Tentativas de Conexão</h2>

        <div>
        <?php
        $tentativa = 1;
            do {
                echo "<p> Tentando conectar...
                (tentativa $tentativa)</p>";

                $tentativa++;
            } while ($tentativa <= 3);



            echo "<strong> Conectado com Sucesso!";

        ?>
        </div>
    </main>
</body>
</html>