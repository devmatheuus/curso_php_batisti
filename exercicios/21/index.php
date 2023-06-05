<!-- 
    Faça as seguintes verificações em estruturas if:

    5 é maior que 2?
    Matheus é diferente de Pedro?
    12 é menor ou igual a 11?

    Você deve inserir os valores em variáveis
 -->

<?php
$num1 = 5;
$num2 = 2;

if ($num1 > $num2) {
    echo "$num1 é maior que $num2 <br>";
}

$nome1 = "Matehus";
$nome2 = "Pedro";

if ($nome1 !== $nome2) {
    echo "$nome1 é diferente de $nome2 <br>";
}

$num3 = 12;
$num4 = 11;

if ($num3 <= $num4) {
    echo "$num3 é menor ou igual a $num4 <br>";
}
?>