<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuperGlobais</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>MSCODE - Aula 02</h1>
        <?php
        const SUPER_GLOBAIS = 'SUPER GLOBAIS';
        echo "<h2>" . SUPER_GLOBAIS . "</h2>";

        $nome = $_GET["nome"];
        $sobrenome = $_GET["sobrenome"];

        echo "Olá $nome $sobrenome";
        ?>
    </main>
</body>

</html>