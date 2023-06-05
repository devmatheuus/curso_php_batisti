<!-- 
    Recebe a string como parametro, que é um texto sinalizando tempo
    A função tenta interpretar e transformar em data;

    Exemplo:
    echo date('d/m/y', strtotime('+2 years')); // 2 anos a mais
-->

<?php
$cincoDias = strtotime("5 days");

$dataAtualMaisCincoDias = date('d/m/y', $cincoDias);

echo $dataAtualMaisCincoDias;
?>