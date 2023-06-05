<?php
$id = 1;

$conn = new mysqli("localhost", "root", "", "cursophp");

$stmt = $conn->prepare("DELETE FROM itens WHERE id = ?");
$stmt->bind_param("i", $id); //s = string, i = integer, d = double

$stmt->execute();
$conn->close();

if ($stmt->error) {
    echo "Error" . $stmt->error;
}
