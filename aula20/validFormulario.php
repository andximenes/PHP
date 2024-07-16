<?php
    
    if($_SERVER['REQUEST_METHOD'] == 'post'){ //Verifica se o método de envio é o método POST
        if(empyt($_POST['nome'])){ //verifica se o campo está vazio
            $erroNome = "Por favor, preencha um nome";
        }else{
            $nome = evitaInjecaoCodigo($_POST['nome']);
            //verifica se os caracteres da variável $nome são strings ou não e retornar true or false, ou seja, se preg_match for diferente dos caracteres especificados, o mesmo irá retornar true e imprimirá na tela a mensagem de erro da variável $erroNome.
            if(!preg_match("[/a-ZA-Z'/]", $nome)){
                $erroNome = "Utilize apenas Letras";
            }
        }
    }

    function evitaInjecaoCodigo($valor){
        $valor = trim($valor); //retira os espaçõs do início e do final da string
        $valor = stripslashes($valor); //remove barras invetidas de uma string
        $valor = htmlspecialchars($valor); //previne a entrada de caracteres especiais
        return $valor;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="validFormulario.css">
    <title>Validação de Formulário</title>
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <h1>Validação de Formulário</h1>
            <fieldset>
                <label for="nome">Nome Completo</label>
                <input type="text" name="nome" placeholder="Digite seu nome" required>
                <span class="erro"></span>
            </fieldset>
            <fieldset>
                <label for="email">E-mail</label>
                <input type="email" name="email" placeholder="exemplo@provedor.com.br" required>
                <span class="erro"></span>
            </fieldset>
            <fieldset>
                <label for="password">Senha</label>
                <input type="password" name="password" required>
                <span class="erro"></span>
            </fieldset>
            <fieldset>
                <label for="password">Confirma senha</label>
                <input type="password" name="password" required>
                <span class="erro"></span>
            </fieldset>
    
            <button type="submit" name="submit" value="Enviar Formulário">Enviar</button>
        </form>
    </div>
</body>
</html>