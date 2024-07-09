<?php
    //Verificando se a variável existe ou não
    if(isset($_GET['nome'])){
        $nome = htmlspecialchars($_GET['nome']);
    }else{
        $nome = "mundo";
    }

    //Alterando a cor das propriedades CSS
    if(isset($_GET['cor'])){
        $cor = htmlspecialchars($_GET['cor']);
    }else{
        $cor = "white";
    }


    //Mudando a cor do background através da variável (nome)
    //$nome = $_GET['nome'];
?>
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Recapitulando o Método Get</title>
        <style>
            body{
                background: <?php echo $cor;?>;
            }
        </style>
    </head>
    <body>
        <!--Pegando o valor através da Url-->
        <h1>
            Olá, 
            <?php
                echo $nome;
            ?>
        </h1>

        <!--Mudando o Valor da Url-->
        <a href="recapitulacaoGet.php?nome=Pedro&cor=pink">
            ir para Pedro
        </a>
        <br>        
        <a href="recapitulacaoGet.php?nome=Tiago&cor=orange">
            ir para Tiago
        </a>
        <br>        
        <a href="recapitulacaoGet.php?nome=João&cor=yellow">
            ir para João
        </a>        
    </body>
    </html>