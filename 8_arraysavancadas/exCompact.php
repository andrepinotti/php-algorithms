<?php

    //Criar características de um objeto ou um animal 
    //Com variáveis, depois transformar essas variáveis em um array com a função compact 

    $animal = "Zebra";
    $cor = "Preto com listas brancas"; //Sim ela é preta com listas brancas
    $patas = 4;
    $classe = "mamífero";

    $arr = compact("animal", "cor", "patas", "classe");

    echo $arr . "<br>"; //Imprimirá o tipo do dado que é array
    print_r($arr);

    //Iremos fazer um loop para essa array e imprimir tudo 

    foreach($arr as $caracteristicas => $value){

        echo "$caracteristicas: $value <br>";
    }