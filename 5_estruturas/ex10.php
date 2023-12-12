<?php 

    //Exemplo de loop aninhado while  
    $i = 0;
    $y = 0;
    while($i <= 10){
        echo "Exemplo $i <br>";
        while($y <= 8){
            echo "Aninhado $y <br>";
            $y++;
        }
        $i++;
        
    }
