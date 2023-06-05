<!-- 
    Converta os seguintes dados para inteiro com o operador de cast:

    * "testando";
    * 12.9;
    * true;
    * [1,2,3];
    
    E veja os resultados.
-->

<?php

$teste = (int) "testando";
$teste2 = (int) 12.9;
$teste3 = (int) true;
$teste4 = (int) [1, 2, 3];

var_dump($teste);
echo "<br>";

var_dump($teste2);
echo "<br>";

var_dump($teste3);
echo "<br>";

var_dump($teste4);
echo "<br>";