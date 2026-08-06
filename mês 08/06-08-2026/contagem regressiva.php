<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main>
        <h1> MS CODE </h1>

        <h2>FUNÇÕES RECURSIVAS</h2>

        <div>
            <?php
            function contagemRegressiva(int $numero)
            {
                // Caso base (para quando chegar a zero)

                if ($numero <= 0) {
                    return;
                }

                echo "contagem: $numero... <br>";

                contagemRegressiva($numero - 1);
            }

            contagemRegressiva(5);

            function contagemCrescente(int $numero)
            {
                if ($numero <= 0) {
                    echo "Decolar!<br>";
                    return;
                }

                contagemCrescente($numero - 1);
                echo "Contagem: $numero...<br>";
            }

        contagemCrescente(5);
            ?>
        </div>
    </main>
</body>

</html>