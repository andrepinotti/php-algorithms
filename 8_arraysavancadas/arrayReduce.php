<?php 

    $arr = [2, 4, 5, 35, 76, 78, 96, 324, 1];

    function soma($a, $b){
        return $a + $b;
    }


    function sub($a, $b){
        return $a - $b;
    }

    $reduzido = array_reduce($arr, "soma");
    $reduzido1 = array_reduce($arr, "sub");

    echo "Resultado da soma: ". $reduzido . "<br>";
    echo "Resultado da subtração: " . $reduzido1 . "<br>";