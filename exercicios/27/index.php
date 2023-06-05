<!-- 
    Crie um array com alguns valores (pelo menos 10) de tipos de dados diferentes;
    Faça um loop while para exibir apenas os dados que são strings
 -->

<?php

$myArray = [1, 2, 3, 4, true, 6.5, ["array"], 8, "9", "Hello World"];

$contador = 0;
// $myArrayLength = count($myArray);

while ($contador < sizeof($myArray)) {
    if (is_string($myArray[$contador])) {
        echo "$myArray[$contador] ";
    }

    $contador++;
}
?>