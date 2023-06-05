<!-- 
    Crie um array com range de 10 a 45;
    Imprima todos os números com uma soma de 6;
    Se passar de 30 a soma, imprima também que o número é muito alto
-->


<?php
$numbers = range(10, 45);

foreach ($numbers as $number) {
    $number += 6;

    if ($number > 30) {
        echo "$number - Valor muito alto <br>";
    } else {
        echo "$number <br>";
    }
}
?>