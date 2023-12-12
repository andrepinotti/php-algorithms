<?php

    //Criar uma função que retorne se é ímpar ou par o número 

   

    function parImpar($num){

        if($num % 2 == 0){
            return "O número $num é par. <br>";//podemos usar echo direto também!
        }
        else {
            return "O número $num é ímpar. <br>";
        }

    }

    echo parImpar(14);
    echo parImpar(77);