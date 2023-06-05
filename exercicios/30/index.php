<!-- 
    Crie um array com números de 1 a 20;
    Crie um loop for para este array;
    Imprima apenas os pares
-->

<?php

$myArr = [];

for ($i = 0; $i <= 20; $i++) {
    array_push($myArr, $i);
}

for ($index = 0; $index < count($myArr); $index += 2) {
    echo "$index <br>";
}

?>