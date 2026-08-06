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
            $meuComputador = [
                "Documentos" => [
                    "MSCODE" => [
                        "aula1.txt",
                        "aula2.txt",
                    ],
                    "Pessoal" => [
                        "curriculo.pdf",
                        "foto_perfil.png",
                    ]

                ],
                "Downloads" => [
                    "musica.mp3",
                ],

                "config.ini"
            ];

            function explorarPastas(array $itens)
            {
                echo "ul";

                foreach ($itens as $chaves => $conteudo) {
                    if (is_array($conteudo)) {
                        echo "<li> <strong> Pasta: $chave </strong>";

                        explorarPastas($conteudo);

                        echo "</li>";
                    } else {
                        //Caso base: se for apenas texto, é um arquivo (condição de parada para este item)
                        echo "<li> Arquivo: $conteudo</li>";
                    }
                }
                echo "</ul>";
            }
            echo "<h3> Explorador de arqyvuis MS CODE</h3>";
            explorarPastas($meuComputador);

            ?>
        </div>
    </main>
</body>

</html>