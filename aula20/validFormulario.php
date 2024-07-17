<?php
    $erroNome = "";
    $erroEmail = "";
    $erroSenha = "";
    $erroRepeteSenha = "";

    if($_SERVER['REQUEST_METHOD'] == 'POST'){ //Verifica se o método de envio é o método POST
        if(empty($_POST['nome'])){ //verifica se o campo está vazio
            $erroNome = "Por favor, preencha um nome";
        }else{
            $nome = evitaInjecaoCodigo($_POST['nome']);
            //verifica se os caracteres da variável $nome são strings ou não e retornar true or false, ou seja, se preg_match for diferente dos caracteres especificados, o mesmo irá retornar true e imprimirá na tela a mensagem de erro da variável $erroNome.
            //Não permite acentos !preg_match("/^[a-zA-Z-' ]*$/", $nome){}
            //Permite Nomes com acentos acentos
            if(!preg_match("/^[a-zA-Zá-úÁ-Úà-ùÀ-Ùã-õÃ-Õâ-ûÂ-Ûé-êÉ-Êí-îÍ-Îó-ôÓ-Ôú-ûÚ-ÛçÇ' ]*$/", $nome)){
                $erroNome = "Utilize apenas letras e acentos";
            }
            
        }

        //CAMPO E-MAIL
        if(empty($_POST['email'])){
            $erroEmail = "Informe um e-mail";
        }else{
            $email = evitaInjecaoCodigo($_POST['email']);
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $erroEmail = "E-mail inválido";
            }
        }

        //CAMPO SENHA
        if(empty($_POST['senha'])){
            $erroSenha = "Infome uma senha";
        }else{
            $senha = evitaInjecaoCodigo($_POST['senha']);
            if(strlen($senha) < 6){
                $erroSenha = "A senha deve ter no mínimo 6 dígitos";
            }
        }
        // CAMPO REPETE SENHA
        if(empty($_POST['repeteSenha'])){
            $erroRepeteSenha = "repita a senha";
        }else{
            $repeteSenha = evitaInjecaoCodigo($_POST['repeteSenha']);
            if($repeteSenha !== $senha){
                $erroRepeteSenha= "As senhas não conferem";
            }
        }

        //Se não houver erro envia o form para a página de cadastro realizado
        if(($erroNome == "") && ($erroEmail == "") && ($erroSenha == "") && ($erroRepeteSenha == "")){
            header('Location: obrigado.php');
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
                <input type="text" 
                <?php if(!empty($erroNome)){ echo "class='invalido'";}?> <?php if(isset($_POST['nome'])){echo "value= '".$_POST['nome']."'";} ?> name="nome" placeholder="Digite seu nome" >
                <span class="erro"><?php echo $erroNome; ?></span>
            </fieldset>
            <fieldset>
                <label for="email">E-mail</label>
                <input type="email" <?php if(!empty($erroEmail)){ echo "class='invalido'";}?> <?php if(isset($_POST['nome'])){echo "value= '".$_POST['email']."'";} ?> name="email" placeholder="exemplo@provedor.com.br" >
                <span class="erro"><?php echo $erroEmail; ?></span>
            </fieldset>
            <fieldset>
                <label for="senha">Senha</label>
                <input type="password" <?php if(!empty($erroSenha)){ echo "class='invalido'";}?><?php if(isset($_POST['nome'])){echo "value= '".$_POST['senha']."'";} ?> name="senha" >
                <span class="erro"><?php echo $erroSenha; ?></span>
            </fieldset>
            <fieldset>
                <label for="repeteSenha">Confirma senha</label>
                <input type="password" <?php if(!empty($erroRepeteSenha)){ echo "class='invalido'";}?> <?php if(isset($_POST['nome'])){echo "value= '".$_POST['repeteSenha']."'";} ?> name="repeteSenha" >
                <span class="erro"><?php echo $erroRepeteSenha; ?></span>
            </fieldset>
    
            <button type="submit" name="submit" value="Enviar Formulário">Enviar</button>
        </form>
    </div>
</body>
</html>