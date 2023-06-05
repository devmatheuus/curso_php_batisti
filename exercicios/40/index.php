<!-- 
    Percorra a string: "O rato roeu a roupa do rei de Roma", a partir de um loop;
    Imprima o número de letras "a" desta string.
-->

<?php
const MY_STR = "O rato roeu a roupa do rei de Roma";
$counter = 0;

for ($i = 0; $i < strlen(MY_STR); $i++) {
    $current_letter = MY_STR[$i];

    if ($current_letter === "a") {
        $counter++;
    }
}

echo "A frase: " . MY_STR . ", possui $counter letras 'a' <br>";
?>