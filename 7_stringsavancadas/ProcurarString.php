<?php 

    //Iremos utilizar a função strpos para fazer a procura de uma string 

    $str = "Realizando o teste de procura de String!";

    $procura = strpos($str, "teste"); //irá retornar 13

    echo $procura;

    echo "<br>";

   //Se não existir a string dentro do contexto, irá retornar o valor false 

   $str2 = "Segundo teste de procura";

   $procura2 = strpos($str2, "String");

   if($procura2 == false){
        echo "Essa String não existe.";
   }