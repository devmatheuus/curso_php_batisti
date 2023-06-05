<!-- 
    setDate => Recebe o ano, mes e dia, alterando completamente a data;
    setTime => Recebe a hora, minuto e segundo, alterando o tempo da data;
-->

<?php
$data = new DateTime();
print_r($data);
echo "<br>";


$data->setDate(2021, 03, 12);
print_r($data);
echo "<br>";

$data->setTime(00, 00, 00);
print_r($data);
echo "<br>";


?>