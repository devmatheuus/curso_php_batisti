<!-- 
    Crie um array com valores inteiros de 10 a 100, com incremento de 10;
    Aplique um loop neste array;
    Quando entrar nos valores 30 ou 40, pule para a próxima execução
-->

<?php

$myArray = [];

for ($i = 10; $i <= 100; $i += 10) {
    array_push($myArray, $i);
}

$counter = 0;

while ($counter < count($myArray)) {
    $current_index = $myArray[$counter];


    if ($current_index === 30 || $current_index === 40) {
        $counter++;
        continue;
    }

    echo "$current_index <br>";



    $counter++;
}


// do {
//     $current_index = $myArray[$counter];

//     if ($current_index === 30 || $current_index === 40) {
//         $counter++;
//         continue;
//     }

//     echo "$current_index <br>";

//     $counter++;
// } while ($counter < count($myArray))

?>