<!-- 
    O PHP por padrão vai utilizar o fuso horário da máquina em que está sendo executado, ou seja, do servidor;
    Porém podemos alterar manualmente o fuso com a função date_default_timezone_set;
    Esta função recebe como parâmetro o novo fuso horário com string.
-->
<?php
date_default_timezone_set('America/Sao_Paulo');

$data = new DateTime();
print_r($data);

?>