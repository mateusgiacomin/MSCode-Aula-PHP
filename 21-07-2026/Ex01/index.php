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
$valor = (float) $moeda;
$idadeString = (string) $idade;
$texto = 'somente um texto';

var_dump($idadeDigitada);
echo "<br>";
var_dump($idade);
echo"<br>";
var_dump($moeda);
echo"<br>";
var_dump($idade);
echo"<br>";
var_dump($valor);

?>
    </main>
    
</body>
</html>