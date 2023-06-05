<!--  
    Transforme a string "este item está em promoção";
    Em "Este item está em PROMOÇÃO";
    Observação: você pode separar as strings, mas não pode escrever em caixa alta ou baixa manualmente, so com funções.

    ucfirst -> primeira letra da string em maiúscula;
    ucwords -> primeira letra de cada palavra em maiúscula.
-->

<?php

// Início da minha resolução
$str = "este item está em promocao";

$strList = explode(" ", $str);
$res = "";

for ($i = 0; $i < count($strList); $i++) {
    $current_word = $strList[$i];

    if ($current_word === "promocao") {
        $res .= strtoupper($current_word);
    } else {
        $res .= $current_word . " ";
    }
}

echo ucfirst($res);
// Fim da minha resolução


// Resolução do professor
$str2 = "este item está em";
$promo = "promocao";

echo ucfirst($str2) . " " . strtoupper($promo);

?>