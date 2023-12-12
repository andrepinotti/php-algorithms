<?php

    //Iremos dividir o array usando a função chunk
    $arr = range(1, 10);

    array_chunk($arr, 5);
    print_r($arr);//Mesmo imprimindo o array ele não retornará a divisão pois não atribuimos uma variável 

    $div = array_chunk($arr, 6);
    echo "<br>";
    print_r($div);
    //Então ele imprimirá a array dividida em duas, uma até o limite que colocamos e o que sobrou dela 

