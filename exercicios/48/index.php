<!-- 
    Crie um array com os valores: batata, maçã, pera, feijão, arroz;
    Remova pera e feijão.
 -->

<?php
$alimentos = ["batata", "maçã", "pera", "feijão", "arroz"];

array_splice($alimentos, 2, 2);

print_r($alimentos);
?>