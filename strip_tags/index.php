<?php
$textoHtml = "<p>Testando parágrafo</p><div>Uma div</div><p>Outro parágrafo</p>";

echo $textoHtml;

$salvarTextoNoBanco = strip_tags($textoHtml);

echo $salvarTextoNoBanco;