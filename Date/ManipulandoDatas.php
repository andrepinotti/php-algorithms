<?php

    
    $date = strtotime("5 days"); //Define o tempo que será adicionado 

    $fivedays = date("d/m/y", $data); //Função date que irá colocar a data atual mais a data que definimos 

    echo "Data de 5 dias: " . $fivedays . "<br>";

    $date2 = strtotime("2 years");

    $twoyears = date("d/m/y", $date2);

    echo "Data de 2 anos: " . $twoyears . "<br>";

    //Iremos usar a função mktime 

    $mktime = mktime(8/*hour*/, 45/*minute*/, 7/*second*/, 8/*month*/,26/*day*/,1999/*year*/);

    $date3 = date("d/m/y", $mktime);
    echo "Data Criada: ". $date3 . "<br>";