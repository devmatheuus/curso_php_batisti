<!-- 
    Crie variáveis com números e outras com string;
    Faça um if checando se é um número;
    Caso for, atribua a multiplicação deste número por 2 em outra variável;
    E crie um outro if, que checa se o novo número é maior que 100;
    Se sim, imprima uma mensagem
 -->

<?php
$myNumber = 5;
$myNumber2 = 51;
$myString = "Hello World";
$myString2 = "Hello";

$resultado = 0;

function checkIsNumber($variavel)
{

    if (is_numeric($variavel)) {


        $GLOBALS['resultado'] = $variavel * 2;

        if ($GLOBALS['resultado'] > 100) {
            echo "O resultado é maior que 100";
        } else { //PLUS
            echo "O resultado é menor que 100";
        }
    } else { //PLUS
        echo "A variável não é um número";
    }
}

checkIsNumber($myString);
?>