<?php

    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

    //montagem do texto
    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-',  $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);

    $texto = $titulo . ' # ' . $categoria . ' # ' . $descricao . PHP_EOL;

    //abrindo arquivo
    $arquivo = fopen('arquivo.hd', 'a');

    //escrevendo o texto
    fwrite($arquivo, $texto);

    //fechando o arquivo 
    fclose($arquivo);

    header('Location: abrir_chamado.php');


?>