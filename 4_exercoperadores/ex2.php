<?php

    //Testar a operação matemática juntando dois tipos de dados diferentes 
    //"5" * 2 e usarmos a função gettype, onde retornará o tipo de dados do resultado
    
    $a = "5";
    $b = 12;
    $result = $a * $b;

    echo "$result <br>";
    echo gettype($result);
