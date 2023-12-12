<?php
    $i = 0;
    //Iremos criar duas arrays como exemplo, uma simples e outra com diferentes tipos de dados;

        $a = [1, 2, 3];
        $b = ["André", 5, 0.3];

    // Para imprimirmos uma array inteira onde mostraremos sua posição e valor dela, usamos a função ** print_r **

        print_r($a);
        echo "<br>";
        print_r($b);
        echo "<br>";

    //Podemos usar o echo para imprimir uma posição específica de uma array 

        echo $a[2]; //Posição
        echo "<br>";
        echo $b[1]; //Posição
        echo "<br>";

    //Também podemos imprimir todos os valores de uma array, utilizando um laço de repetição para imprimir a array 'a'
        
        for( $i=0; $i<=2; $i++){

            echo "[$a[$i]]";
            echo " ";
        }

?>