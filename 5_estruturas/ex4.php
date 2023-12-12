<?php

    //Fazer ifs aninhados, primeiro if verificar se é um número, se caso for multiplicaremos por 2(atribuído em outra variável);
    //Se caso for, criar um if que checa se é maior que 100, se sim imprime uma mensagem 

    $x = 70.7;
    $y = "String";
    $m = 2;

    //X sendo 70
    if(is_numeric($x)){
        echo "$x é numérico. <br>";
        $result = $x * $m;
        if($result > 100){
            echo "$x é maior que 100.<br>";
            echo "O resultado é $x.";
        }
    }

    //y não entrará na condição 

    if(is_numeric($y)){
        echo "$y é numérico. <br>";
        $result = $y * $m;
        if($result > 100){
            echo "$y é maior que 100.<br>";
        }
    }