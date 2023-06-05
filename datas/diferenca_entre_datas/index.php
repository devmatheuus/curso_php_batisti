<!-- 
    Podemos calcular a diferença entre duas datas com o método diff;
    O resultado pode ser formatado com format();

    Exemplo:
    $data1 = new DateTime();
    $data2 = new DateTime('2020-05-01');

    $intervalo = $data1->diff($data2);

    echo $intervalo->format('%R%a dias');

    %R => Retorna o sinal de + ou -;
    %a => Retorna a quantidade de dias;
-->

<?php
$data1 = new DateTime();
$data2 = new DateTime('2020-05-01');

$intervalo = $data1->diff($data2);

echo $intervalo->format('%R%a dias');


$dataA = new DateTime();
$dataB = new DateTime();

$dataB->setDate(2023, 01, 01);

$diferenca = $dataA->diff($dataB);
echo "<br>";
echo $diferenca->format('%R%a dias');
echo "<br>";
echo print_r($diferenca);
?>