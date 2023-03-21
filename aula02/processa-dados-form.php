<?php
   $nome = "";
   
   if (isset($nome = $_GET['nome'])){
        $nome = $_GET('nome');
   }

    echo "Meu nome é: " .$nome;
    ?>