<?php 

    $str = "Carro - Navio - Helicóptero  - Barco - Jangada.";

    $arr = explode(" - ", $str);
    print_r($arr);
    echo "<br>";
    echo "Itens: ";
   for($i = 0; $i < count($arr); $i++){
        echo "$arr[$i] ";
   }