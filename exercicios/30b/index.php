<!-- 
    Crie um array de 1 a 10;
    Utilize um loop for para criar este array;
    Imprima o array com print_r
-->

<?php

$myArr = [];

for ($i = 0; $i <= 10; $i++) {
    array_push($myArr, $i);
}

print_r($myArr);

?>