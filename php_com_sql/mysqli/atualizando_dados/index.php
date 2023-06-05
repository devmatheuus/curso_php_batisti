<?php
$conn = new mysqli("localhost", "root", "", "cursophp");

$stmt = $conn->prepare("UPDATE itens SET nome = ? WHERE id = ?");

$nome = "Abajur ATUALIZADO";
$id = 88;

$stmt->bind_param("si", $nome, $id); //s = string, i = integer, d = double

$stmt->execute();

$conn->close();

if ($stmt->error) {
    echo "Error" . $stmt->error;
}
