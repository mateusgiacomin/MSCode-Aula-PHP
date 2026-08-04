<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
    <h1>MS-CODE</h1>

    <h2>Funções</h2>
    <div>
        <?php 
        echo "<h3> Validação de Cadastro de Alunos.</h3>";

        //Simulando dados vindo de um formulário ($_GET ou $_POST)
        $nome = "Mateus";

        $email = "mateussgiacomin@gmail.com";
        
        $cpf = "141.964.497-19";

        $emailTratado = '';
        $nomeTratado = '';

        if (isset($email) && !empty($email)){
            $emailTratado = trim($email);
        }

        if (isset($nome) && !empty($nome)){
            $nomeTratado = trim($nome);
        }

        if (!str_contains($emailTratado, '@')) {
            echo "Email inválido! Precisa conter o caractere '@'<br>";
        }

        $cpfApenasNumeros = str_replace(['.', '-'], '', $cpf);
        if (strlen($cpf) < 11){
            echo "Email inválido! Precisa ter no minimo 11 caracteres";
        }

        $emailFormatado = strtolower($emailTratado);
        $nomeFormatado = strtoupper($nomeTratado);
        $cpfMascarado = substr($cpfApenasNumeros, 0, 3) . '.***.***-**';

        echo "<h4><strong> Aluno Cadastrado: </strong></h4>";
        echo "Nome: $nomeFormatado <br>";
        echo "Email: $emailFormatado <br>";
        echo "CPF Protegido: $cpfMascarado<br>";
        ?>
    </div>
    </main>
</body>
</html>