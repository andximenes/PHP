<?php
    $titulo = htmlspecialchars(isset($_GET['titulo']) ? $_GET['titulo'] : '');
    $lancamento = htmlspecialchars(isset($_GET['anoDeLancamento']) ? $_GET['anoDeLancamento'] : '');
    $genero = htmlspecialchars(isset($_GET['genero']) ? $_GET['genero'] : '');
    $txtarea = htmlspecialchars(isset($_GET['txtarea']) ? $_GET['txtarea'] : '');

    echo "<p>Título: $titulo</p><br>";

    $date = date_create_from_format('Y-m-d', $lancamento);
    $formatted_date = date_format($date, 'd/m/Y');
    echo "<p>Lançamento: $formatted_date</p><br>";

    echo "<p>Gênero: $genero</p><br>";
    echo "<p>Sinpse: $txtarea</p><br>";

?>

