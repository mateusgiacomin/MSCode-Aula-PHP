<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão</title>
</head>

<body>
    <h1>Conversão de Tipos</h1>
    <main>
        <?php
        //simulando entrada de dados do formulário
        $idadeDigitada = '20';
        $moeda = '100.20';

        $idade = (int) $idadeDigitada;

        $temIngresso = true;
        $amigoDoDono = false;
        $camarote = true;

        echo "<h2> Sistema de Catraca <br></h2>";

        //Condição de tabela verdade
        if ($idade >= 18 && ($temIngresso || $amigoDoDono)) {
            $status = 'Acesso Vip Liberado';
            $corPulseira = 'dourada';
            $catracaLiberada = true;
        } else if ($idade >= 18 && $temIngresso === false) {
            $status = 'Barrado na porta';
            $corPulseira = 'Nenhuma';
            $catracaLiberada = false;
        }

        echo "<p>Status: $status <br></p>";
        if ($status === 'acesso Negado')
            echo '<p>Volte para casa e vá jogar videogame! <br></p>';

        ?>
    </main>

</body>

</html>