<!-- 
    Converta a seguinte array para string:
    ["O", "PHP", "é", "muito", "legal"]
-->

<?php
$arr = ["O", "PHP", "é", "muito", "legal"];
$str = implode(" ", $arr);

echo $str;
?>