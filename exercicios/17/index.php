<!-- 
    Verifique as seguintes operações com AND:
    
    * 15 > 5 AND "João" === "João";
    * "teste" > 5 AND 1;
    * 2 == 3 AND 5 >= 3 
-->

<?php

$operacao1 = 15 > 5 && "João" === "João";

$operacao2 = "teste" > 5 && 1;

$operacao3 = 2 == 3 && 5 >= 3;

var_dump($operacao1);
var_dump($operacao2);
var_dump($operacao3);

?>