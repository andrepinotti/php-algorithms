<?php

   //Aqui nesse arquivo php iremos fazer exemplos de verificação de tipos de dados, obrigado a usar a estrutura de condição if.

   //1: Iremos verificar se algum dado é inteiro, logo usaremos a função is_int. 

   if(is_int(8.9)){

      echo "É um número inteiro. <br>";
   }
   else{
      echo "Não é um número inteiro. <br>";
   }
   
   //Ele verifica o conteúdo que está dentro do parâmetro da função, no caso se utizarmos um valor inteiro ele imprimiria "é inteiro".

   //Também podemos usar variável como parâmetro que temos as mesmas utilizações.

   $var_teste_int = 7; 
   if(is_int($var_teste_int)){
      echo "É inteiro. <br>";
   }
   else {
      echo "Não possui valor inteiro. <br>";
   }

   //2: Faremos a verificação de tipo de dado float com a função is_float 
   $var_teste_float = 7.8;
   $var_teste_float2 = 9;
   if(is_float($var_teste_float)){
      echo "É float <br>";
   }

   if(is_float($var_teste_float2)){
      echo  "É float <br>";
   }
   //No caso acima, ele não entra na estrutura de condição porque defini a variável teste como inteira, com isso ele não entra no if. 

   //3: Faremos a verificação de String. 
   $var_teste_string = "André";
   if(is_string(89)){
      echo "É String. <br>";
   }
   else {
      echo "Não é String. <br>";
   }
   if(is_string($var_teste_string)){
      echo "$var_teste_string é String. <br>";
   }
   else {
      echo "$var_teste_string não é String. <br>";
   }

   //Na estrutura de condição acima colocamos o nome da variável para ser apresentada. 

   //4: Faremos a verificação agora de tipo de dados booleanos 

   echo true; // Será impresso '1' para verdadeiro 
   echo "<br>"; // Pula linha 
   echo false;  // Não será impresso nada, mas é o false representado por '0, [], 0.0, null'

   $var_teste_boolean  = true;
   
   if(is_bool($var_teste_boolean)){
      echo "É boolean. <br>";
   }
   

?>