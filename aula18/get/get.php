<?php
//GET
    //Verificação o nome
    if(isset($_GET['nome']))
    {
        //htmlspecialchars evitar que alguém coloque um código malicioso
       $nome = htmlspecialchars($_GET['nome']);
    }
    else
    {
        $nome = "Mundo";
    }

    //Verifica a cor
    if(isset($_GET['cor']))
    {
        $cor = htmlspecialchars($_GET['cor']);
    }else
    {
        $cor = "white";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <style>
        body
        {
            background-color: <?php echo $cor; ?>;
        }
   </style>
    <title>GET</title>
</head>
<body>
    <h1> Olá, 
        <?php
            echo $nome;
        ?>
    </h1>
    
    <a href="get.php?nome=João&cor=red">Ir para João</a><br>
    <a href="get.php?nome=Paulo&cor=orange">Ir para Paulo</a><br>
    <a href="get.php?nome=Lucas&cor=green">Ir para Lucas</a>
</body>
</html>