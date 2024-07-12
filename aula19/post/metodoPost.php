<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Filmes - Método Post</title>
    <style>
        .centralizado {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 50vh;
        }
    </style>
</head>
<body>
    <div class="centralizado">
        <h1>Cadastre seus filmes</h1>
        <form method="post" action="resultPost.php">
            <label for="titulo">Título</label>
            <input type="text" name="titulo" placeholder="Digite o nome do filme">
            <br>
            <br>
            <label for="anoDeLancamento">Ano de Lançamento</label>
            <input type="date" name="anoDeLancamento">
            <br>
            <br>
            <fieldset>
                <legend>Gênero</legend>
                <input type="radio" name="genero" value="Acão">Ação<br>
                <input type="radio" name="genero" value="Aventura">Aventura<br>
                <input type="radio" name="genero" value="Comédia">Comédia<br>
                <input type="radio" name="genero" value="Terror">Terror<br>
            </fieldset>
            <br>
            <br>
            <legend>Sinopse</legend>
            <textarea name="txtarea" rows="4" cols="50"></textarea>
            <br><br>

            <button type="submit">Enviar</button>
        </form>
    </div>
    
</body>
</html>