<!-- 
    Crie um array multidimensional com 3 arrays que tem 4 elementos cada;
    Imprima todos os elementos de cada um dos arrays;
    Imprima também quando está mudando de array,
-->

<?php
$arrays = [
    [1, 2, 3, 4],
    [5, 6, 7, 8],
    [9, 10, 11, 12]
];

for ($i = 0; $i < count($arrays); $i++) {
    $currentArray = $arrays[$i];

    for ($j = 0; $j < count($currentArray); $j++) {
        $current_number = $currentArray[$j];

        echo "$current_number <br>";
    }

    if ($i + 1 !== count($arrays)) {
        echo "Trocando de array <br>";
    }
}
?>