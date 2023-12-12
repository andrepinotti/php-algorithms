<?php

    $arr = [1, 2, 3, 4, 5];
    
    
        $maior = 0;
        for($i=0; $i < count($arr); $i++){
            if($maior < $arr[$i]){
                $maior = $arr[$i];
            }
        }
    echo $maior;
// -------------- OU ----------------
//Usando a função 'max'
/*$arr = [1, 2, 3, 4, 5];
    
    function maiorElemento($arr){
        $maior = max($arr);
        return $maior;
    }
