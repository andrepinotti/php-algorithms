<?php

    //Criar um loop que vai até 30 , contador deve iniciar como 4, incremento de 2 em 2 e para quando chegarmos no 24;

    $i = 4;

    while($i <= 30){

        echo "O i é igual a $i <br>";
        if($i == 24){
            echo "Saindo do Loop, contador igual a 24. <br>";
            break;
        }

        $i = $i + 2;
    }