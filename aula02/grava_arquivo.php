<?php

    $texto = $_POST["texto"];
    $nome = $_POST["nome"]."txt;

    if (file_exists($nome) == false ){
        $arquivo = fopen($nome, "w");
    
        fwrite($arquivo,$texto);
        echo "Arquivo gerado com sucesso";
        fclose($arquivo);
    }
    else {
        echo "Erro: Arquivo ja existe, nao foi possivel gravar";
    }

    ?>