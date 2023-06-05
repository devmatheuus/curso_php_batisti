<!-- 
    Converta a seguinte string para array:
    carro - navio - helicóptero - barco - jangada
-->

<?php
$str = "carro - navio - helicóptero - barco - jangada";
$arr = explode("-", $str);

print_r($arr);
?>