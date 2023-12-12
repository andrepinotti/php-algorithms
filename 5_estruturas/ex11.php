<?php 

    $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

    $i = 0;
    while($i < count($arr)){

        if(($arr[$i] == 4)||($arr[$i] == 6)){
            $i++;
            continue;
        }

        echo "Posição: $arr[$i] <br>";
        $i++;

    }