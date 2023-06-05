<!-- 
    Verifique as seguintes operações com OR/AND:
    
    * 12 < 5 OR "João" === "João";
    * 1 > 5 OR 1;
    * 20 === "20" AND 51 >= 31; 
-->

<?php

$operacao1 = 12 < 5 || "João" === "João";

$operacao2 = 1 > 5 || 1;

$operacao3 = 20 === "20" && 51 >= 31;

var_dump($operacao1);
var_dump($operacao2);
var_dump($operacao3);

?>