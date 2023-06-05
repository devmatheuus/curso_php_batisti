<!-- 
    Crie um array com os seguintes valores: jaguar, 3.0, azul, 18, Teto solar, automático;
    Chame este array de carro;
    Crie variáveis com base neste array
-->

<?php
$carro = ["jaguar", 3.0, "azul", 18, "Teto solar", "automático"];

list($marca, $potenciaDoMotor, $cor, $ano, $opcional, $cambio) = $carro;


echo "Marca: $marca <br>";
echo "Potência do motor: $potenciaDoMotor <br>";
echo "Cor: $cor <br>";
echo "Ano: $ano <br>";
echo "Opcional: $opcional <br>";
echo "Câmbio: $cambio <br>";

?>