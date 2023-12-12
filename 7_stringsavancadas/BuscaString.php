<?php

    $str = "Essa é a minha procura de String";

    $procura = substr($str, 10, 5); //String, Índice inicial, comprimento ou índice final

    echo "$procura <br>";

    $str2 = "A procura da string pode cortar boa parte da nossa frase.";

    $x = substr($str, 20, );//Quando não temos indice final ele pega o resto da frase inteira
    //Se quisermos cortar é so colocar o número onde o índice acaba