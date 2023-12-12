<?php

    //Iremos checar se  as variáveis são inteiras 
    $a = "texto";
    $b = [14 , 8];
    $c = 4;

    if(is_int($a)){
        echo "$a é integer. <br>";
    } 
    else {
        echo " $a não é integer. <br>";
    }

    if(is_int($b)){
        echo "$b é integer. <br>";
    } 
    else {
        echo " $b não é integer. <br>";
    }

    if(is_int($c)){
        echo "$c é integer. <br>";
    } 
    else {
        echo "$c não é integer. <br>";
    }