<?php 

    //Criar uma array com os elementos de 10 a 45 e fazer a soma de todos os números 

    $arr = range(10,45);

    for($i = 0;$i < count($arr); $i++){

        $soma = $arr[$i] + 6;
        echo "Soma do número $i: $soma. <br>";
        if($soma > 30){
            echo "A soma do número $i é muito alta, pois passa de 30. <br>";
        }
    }