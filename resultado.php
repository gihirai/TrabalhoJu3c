<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESULTADO DA PESQUISA</title>
</head>
<body>
    <div>
        <h1>Resultado da pesquisa</h1>
        <?php
        $idade = $_POST ["idade"];
        $nome = $_POST ["nome"];
        $genero = $_POST ["genero"];
        if ($idade > 25) {
        echo "Seus dados são: $nome, $genero, $idade. Você pode se cadastrar!";
        } else {
        echo "Seus dados são: $nome, $genero, $idade. Você não pode se cadastrar!";
        }
    ?>
    </div>
</body>
</html>