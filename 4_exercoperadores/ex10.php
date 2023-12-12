<?php

    //Exercício usando o operador cast 
    //"testando", 12.9 , true, [1, 2, 3], converter para int 

    $a = (int) "testando";
    $b = (int) 12.9; // Não arredonda, então é igual a --12--
    $c = (int) true;
    $d = (int) [1, 2, 3]; 

    if($b == 12){

        echo "É integer.<br>";
    }

    echo $a . "<br>";
    echo $b . "<br>";
    echo $c . "<br>";
    echo $d . "<br>";