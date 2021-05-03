<?php

    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);

    $texto = $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

    //abre o arquivo
    $arquivo = fopen('arquivo.hd', 'a');

    //escreve no arquivo
    fwrite($arquivo, $texto);

    //fecha o arquivo
    fclose($arquivo);

    header('Location: abrir_chamado.php?sucesso');