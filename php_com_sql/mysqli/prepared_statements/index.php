<?php
$conn = new mysqli("localhost", "root", "", "cursophp");

$stmt = $conn->prepare("INSERT INTO itens (nome, descricao) VALUES (?, ?)");

$nome = "Abajur";
$descricao = "Luminoso";

$stmt->bind_param("ss", $nome, $descricao); //s = string, i = integer, d = double

$stmt->execute();

$conn->close();
