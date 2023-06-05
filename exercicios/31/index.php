<!-- 
    Crie um array com strings;
    Utilize a função implode no array;
    Primeiro argumento: ",";
    Segundo argumento: o seu array;
    Atribua a invocação da função a uma variável;
    Exiba o resultado.
-->

<?php
$myArray = ["Matheus", "Barbara", "Silva"];

$resultado = implode(", ", $myArray);

echo $resultado;
?>