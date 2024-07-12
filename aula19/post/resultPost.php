<?php
    $titulo = limpaPost((isset($_POST['titulo']) ? $_POST['titulo'] : ''));

    $lancamento = limpaPost((isset($_POST['anoDeLancamento']) ? $_POST
    ['anoDeLancamento'] : ''));
    $date = date_create_from_format('Y-m-d', $lancamento);
    $formatted_date = date_format($date, 'd/m/Y');

    $genero = limpaPost((isset($_POST['genero']) ? $_POST['genero'] : ''));
    $txtarea = limpaPost((isset($_POST['txtarea']) ? $_POST['txtarea'] : ''));

    //protegendo as informações de alguma injeção sql
    function limpaPost($valor){
        $valor = trim($valor); //retira os espaçõs do início e do final da string
        $valor = stripslashes($valor); //remove barras invetidas de uma string
        $valor = htmlspecialchars($valor); //previne a entrada de caracteres especiais
        return $valor;
    }

    echo "<p>Título: $titulo</p><br>";
    echo "<p>Lançamento: $formatted_date</p><br>";
    echo "<p>Gênero: $genero</p><br>";
    echo "<p>Sinpse: $txtarea</p><br>";

?>

