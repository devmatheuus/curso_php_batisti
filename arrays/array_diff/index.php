<!-- 
    Retorna um array contendo os valores diferentes entre os arrays passados
-->

<?php
$arr1 = [1, 2, 3];
$arr2 = [4, 2, 6];

$diff = array_diff($arr1, $arr2);

print_r($diff);