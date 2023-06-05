<!-- 
    Crie uma variável que receba uma velocidade de um carro;
    Depois crie uma estrutura if que verifica essa velocidade;
    Se a velocidade for menor que 40, imprima que o motorista está na velocidade correta;
    Se igual a 40, imprima uma mensagem para o motorista tomar cuidado;
    Se for maior de 40, imprima uma mensagem de multa 
-->

<?php


function radar($velocidade)
{
    if ($velocidade < 40) {
        echo "Você está na velocidade correta";
    } else if ($velocidade == 40) {
        echo "Você está na velocidade limite";
    } else {
        echo "Você está acima da velocidade permitida";
    }
}

radar(20);

?>