<?php

    //Função que retorne o quadrado de um número

    function potenciacao($num){

        $resultado = $num * $num;
        $r2 = pow($num, 3);
        return " O quadrado do número $num é $resultado e o $num ao cubo é $r2 .<br>";

    }

    echo potenciacao(7);