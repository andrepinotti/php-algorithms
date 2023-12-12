<?php

    //Para encontrar certo elemento em um array temos que chamar a função in_array e passar o indice e o array por parãmetro 
    $arr = ["item", "caixa", 23, 98.7];

    //agora iremos procurar 98.7, se retornar true é porque existe
    $resultado = in_array(98.7, $arr); 

    echo $resultado . "<br>"; //Nisso retornará 1

    $arr2 = ["Gato Persa", "Pelo Cinza", 40];

    if(in_array("Gato Persa", $arr2)==true){
        echo "Existe no array <br>";
    }
    else{
        echo "Não existe no array <br>";
    }