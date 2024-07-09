<?php
    $nome = $_GET['nome'];
    $idade = $_GET['idade'];

    if(isset($_GET['nome']) && isset($_GET['idade'])){
        echo "<h1>Nome: $nome Idade: $idade</h1>";
    }
?>