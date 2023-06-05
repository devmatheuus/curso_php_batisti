<!-- 
    A funnção mktime recebe em seus parâmetros: hora, minutos, segundo, mês, dia e ano;
    Assim podemos criar uma data a partir desta informação;

    Exemplo:
    $data = mktime(01, 18, 00, 03, 12, 2021);
    echo date('d/m/y', $data);
-->


<?php

$data = mktime(01, 18, 00, 03, 12, 2021);

echo date('d/m/y', $data);