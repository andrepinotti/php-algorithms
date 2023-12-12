<?php

    //Verificar operações com AND, 15>5 and "João" === "João"
    //"teste", > 5 and 1 
    //2 == 3 and 5 >= 3

    if((15 > 5)&&("João" === "João")){
        echo "True 1.<br>";
    }
    else {
        echo "False 1.<br>";
    }

    if(("teste" > 5)&&("teste" > 1)){
        echo "True 2.<br>";
    }
    else {
        echo "False 2.<br>";
    }

    if((2 == 3)&&(5 >= 3)){
        echo "True 3.<br>";
    }
    else {
        echo "False 3.<br>";
    }

