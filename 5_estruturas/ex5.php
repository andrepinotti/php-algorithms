<?php
    $p1 = 6;
    $p2 = 8;
    function compararNumeros($p1, $p2){
    
        if($p1 > $p2){
            echo "O primeiro número é maior.";
        }
            else if($p1 == $p2){
                echo "Os números são iguais. ";            
            }
            else if($p1 < $p2){
            echo "O segundo número é maior. ";
            }
    }

    compararNumeros($p1, $p2);
    