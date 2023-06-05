<!-- 
    Crie um array de 10 a 20 com for;
    Faça um loop encima do array criado dinamicamente;
    Imprima apenas os números ímpares;
-->

<?php

$myArr = [];

for ($i = 10; $i <= 20; $i++) {
    array_push($myArr, $i);
}

for ($index = 0; $index < count($myArr); $index++) {
    $currentIndex = $myArr[$index];

    if ($currentIndex % 2 === 1) {
        echo "$currentIndex <br>";
    }
}

?>