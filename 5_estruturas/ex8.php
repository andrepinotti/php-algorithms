<?php 

    //Fazer uma array que tenha pelo menos 10 dados e imprimir somente as strings

    $x = [1, 6.0, "20", "Palmeiras", true, false, "Futebol", 333.77, "4", 9, "Testando o protocolo http"];

    //Para contar os índices de um array precisamos igualar o contador ao índice ou usarmos uma função pronta chamada count 
    $c = count($x);
    $y = 0;

    while($y < $c){

        if(is_string($x[$y])){
            echo "$x[$y] <br>";
        }
        $y++;
    }
    
 