<!-- 
    Crie algumas variáveis com tipos de dados diferentes: string int e boolean, por exemplo;
    Cheque se a variavel é um inteiro;
    Caso sim, apresente uma mensagem confirmando o tipo do dado;
    Caso não, apresente outra mensagem;
-->

<?php
$myInt = 5;
$myString = "Hello World";
$myBool = true;


function checkIsInt($variavel)
{
    if (is_int($variavel)) {
        echo "A variável é um inteiro";
    } else {
        echo "A variável não é um inteiro";
    }
}

checkIsInt($myString);

?>