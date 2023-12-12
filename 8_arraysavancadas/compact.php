<?php

    //Agora iremos utilizar a função compact que cria arrays, através de variáveis
    //Para isso, iremos reunir várias variáveis e atribuir uma variável para o compact 

    $marca = "BMW";
    $tetoSolar = true;
    $roda = "Aro 50";

    //Para mostrar o conteúdo temos que passar os nomes das variáveis como parâmetro e assim será transformada em chave
    $carro = compact("marca", "tetoSolar", "roda");

    print_r($carro);