<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1> MS CODE - CONDICIONAL SWITCH </h1>
    <main>
        <?php
        //simulando entrada de dados do formulário

        $opcaoEscolhida = (int) '2';

        echo "<h2> MSCODE GAMES <br></h2>";

        switch($opcaoEscolhida) {
            case 1:
                echo "Iniciando um novo jogo...<br>";
                break;

                case 2:
                    echo "<p>&#9881 Abrindo painel de configuração...</p>";
                    break;
                case 3:
                    echo "<p> Carregamdno a tela de conquistas ....</p>";
                    break;
                    default:
                    echo "<p> Opção Inválida </p>";
        }
        ?>
    </main>
</body>

</html>