<?php
$jogo = [
    array(1,"Zé",11),
    array(2,"José",4),
    array(3,"Zéca",22),

];

    echo "<pre>";
    print_r($jogo);
    echo "</pre>";


    echo $jogo[1][2];
    echo "<br>";
    echo "Os pontos de"  .$jogo[1][1], "sao: " .$jogo[1][2];
    $jogo[1][2] = 30;
    echo "<br>";    
    echo "Os pontos de"  .$jogo[1][1], "sao: " .$jogo[1][2];

?>