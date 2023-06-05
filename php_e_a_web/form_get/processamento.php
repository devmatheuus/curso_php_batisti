<?php

if (isset($_GET["nome"])) {
    $nome = $_GET["nome"];
} else {
    $nome = "Padrão";
}


echo "<h1>Olá, $nome</h1>";