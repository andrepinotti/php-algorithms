<?php


    $arr = [1, 2, 77, 8, 15, 3, 2, 1];
    echo "<br>";
    print_r($arr);
    echo "<br>";
    echo "Elementos maiores que 7 dentro dessa array: <br>";
    for($i = 0; $i <= count($arr); $i++){

        if($arr[$i] > 7){
            
            echo $arr[$i] . "<br>";
        }

    }

    echo "Número de elementos da array: ";
    echo count($arr) . "<br>"; //cCount conta quantos elementos tem dentro da array
    
