<?php
$conn = new mysqli("localhost", "root", "", "cursophp");

$id = 1;

$stmt = $conn->prepare("SELECT * FROM itens WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();

$res = $stmt->get_result()->fetch_row();

print_r($res);

$conn->close();
