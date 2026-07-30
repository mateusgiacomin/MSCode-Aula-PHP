<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main>
        <h1>Funções</h1>

        <h2></h2>

        <div>
            <?php

            function exibirBoasVindas(): void
            {
                echo "<h2> Bem vindo ao Sistema MS CODE <h2> <br>";
                echo "Servidor ativo e pronto para uso<br>";
            }
            function farmarAura(string $nome, int $nivel)
            {
                return "Olá <strong> $nome </strong>! Seu nivel farmando aura é: <em>$nivel</em>";
            }
            $nome = 'Mateus';
            $nivel = 9999;

            $nivelDeAura = farmarAura($nome, $nivel);

            echo $nivelDeAura;
            ?>
        </div>
    </main>
</body>

</html>