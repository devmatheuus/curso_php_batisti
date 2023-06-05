<!-- 
    Os métodos format e modify são da classe DateTime e nos ajudam a manipular os dados neste objeto;

    format => Formatar a data;
    modify => Alterar a data;
-->

<?php
$data = new DateTime();

echo $data->format('d/m/y') . "<br>";
echo $data->format('D - M - Y') . "<br>";
echo $data->format('l . F . Y') . "<br>";


// data + 5 dias
$data->modify('+5 days');
echo $data->format('d/m/y') . "<br>";

// + 2 meses
$data->modify('+2 months');
echo $data->format('d/m/y') . "<br>";

// + 3 anos
$data->modify('+3 years');
echo $data->format('d/m/y') . "<br>";


?>