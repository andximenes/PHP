<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Filmes</title>
    <style>
        .centralizado {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    </style>
</head>
<body>
    <div class="centralizado">
        <h1>Cadastre seus filmes</h1>
        <form method="get" action="resultCadastro.php">
            <label for="titulo">Título</label>
            <input type="text" name="titulo" placeholder="Digite o nome do filme">
            <br><br>
            <label for="anoDeLancamento">Ano de Lançamento</label>
            <input type="date" name="anoDeLancamento">
            <br>

            <p>Gênero</p>
            <input type="radio" name="genero" value="acao">Ação<br>
            <input type="radio" name="genero" value="acao">Aventura<br>
            <input type="radio" name="genero" value="acao">Comédia<br>
            <input type="radio" name="genero" value="acao">Terror<br>

            <p>Sinopse</p>
            <textarea name="txtarea" rows="4" cols="50"></textarea>
            <br>
            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>