<?php

    //Criar uma variável com valor 5 e outra com valor 3 
    //Realizar comparações idênticas, não idênticas, igualdade e diferença

    $a = 5;
    $b = 3;
    if(($a - $b) == 2){
        echo "O valor da subtração é 2. <br>";
    }
    else {
        echo "O valor da subtração não é 2. <br>";
    }

    if($a == $b){
        echo $a . " é igual a " . $b . ".<br>";
    }
    else {
        echo $a . " é diferente de " .$b . ".<br>";
    }

    if(($a + $b)===8){
        echo "$a + $b é idêntico a 8. <br>";
    }

    if(($a + $b) !== "8"){
        echo "A soma de $a e $b é não idêntico a '8'. <br>";
    }