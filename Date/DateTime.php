<?php 

    $ActualDate = new DateTime();

    print_r($ActualDate);

    echo "<br>";

    $FormattedDate = date_format($ActualDate, "d/m/y"); //Um dos métodos de formatação de data

    echo "Data Formatada: " . $FormattedDate . "<br>";


    //Exemplos de métodos de formatação que usaremos: 
        //Format-> formata a data normal 
        //modify-> altera a data
    //Lembrando que esses métodos são usados por instanciação 

    $format = $ActualDate->format("d - m - y");

    echo "Data formatada por instanciação: " . $format ."<br>";

    $ActualDate->modify("+50 years"); //Vai modificar a data, após isso so basta chamar o objeto instanciado e sua formatação

    echo "Data modificada por instanciação: " . $ActualDate->format("d/m/y") . "<br>";

    //Podemos também definir diretamente usando métodos de definição
        //SetDate -> define data: dia, mês e ano
        //SetTime -> define tempo: hora, minuto e segundo 

    $ActualDate->setDate(2011, 03, 26);

    print_r($ActualDate);

    echo "<br>";

    $ActualDate->setTime( 17, 45, 32);

    print_r($ActualDate);
