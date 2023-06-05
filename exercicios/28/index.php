<!-- 
    Crie um loop que vai até o número 30;
    O contador deve iniciar como 4;
    Faça incrementos de dois em dois no contador;
    Utilize o break para parar o loop quando o chegar em 24;
-->

<?php

$contador = 4;

while ($contador <= 30) {
    echo "$contador <br>";

    if ($contador === 24) {
        // break;
    }

    $contador += 2;
}
?>