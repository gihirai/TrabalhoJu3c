<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRABALHO 3C</title>
</head>
<body>
    <div>
        <h1>Bem vindo(a) ao cadastro</h1>
        <form action="resultado.php" method="post">
            Nome:
            <input type="text" name="nome">
            <p></p>
            Gênero
            <label for="genero"></label>
            <select name="genero">
                <option value="feminino">Feminino</option>
                <option value="masculino">Masculino</option>
            </select>
            <p></p>
            Idade
            <input type="number" name="idade">
            <p></p>
            <input type="submit" value="enviar">
        </form>
    </div>
</body>
</html>