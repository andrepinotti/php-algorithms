<?php

    //O exercício consiste em fazer um array com características de um carro e imprimir apenas duas informações 
    $carro = ['Nome' => 'Jetta', 'Ano' => 2016, 'Modelo' => 'Sedan', 'Kilometragem' => 50.000, 'Marca' => 'Volkswagen', 'Teto Solar' => true];
    echo $carro['Modelo'];
    echo "<br>";
    echo $carro['Marca'];
    echo "<br>";
    print_r($carro);

?>