    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <main>
            <h1>MS CODE</h1>

            <h2>Funções</h2>
            <div>
                <?php 
                // objetivo: transformar strings em listas e depurar estruura interna.
                // Funções utilizadas: explode(), implode(), count(), in_array(). var-dump()
                
                echo"<h3>Painel de habilidades.</h3>";

                $inputLinguagens = "PHP, HTML, CSS, JS, MTYSQL";

                $listaSkills = explode(",", $inputLinguagens);

                echo"<pre>";
                    echo"<strong>Skills: </strong><br>";
                    var_dump($listaSkills);
                    echo "</pre>";

                    $totalSkills = count($listaSkills);
                    echo "<p> Total de Skills: $totalSkills</p>";

                    if(in_array("PHP", $listaSkills)){
                        echo "<strong> Selo Dev Back-End</strong><br>";
                    }

                $textoFormatado = implode (" | ", $listaSkills);
                echo "Trilha do aluno>: $textoFormatado";
                ?>
            </div>

        </main>
    </body>
    </html>