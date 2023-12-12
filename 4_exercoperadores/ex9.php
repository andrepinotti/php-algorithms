<?php 

    //Ex de comparação com o operador OR
    //12 < 5 or "João" === "João"
    //1 > 5 or 20 === "20" and 51 >= 31

    if((12 < 5)||("João" === "João")){
        echo "True 1.<br>";
    }
    else {
        echo "False 1.<br>";
    }

    if((1 > 5)||(20 === "20")&&(51 >=31)){
        echo "True 2.<br>";
    }
    else {
        echo "False 2.<br>";
    }

    