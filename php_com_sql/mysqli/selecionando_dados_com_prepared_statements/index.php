<?php
$conn = new mysqli("localhost", "root", "", "cursophp");

$id = 1;

$stmt = $conn->prepare("SELECT * FROM itens WHERE id > ?");
$stmt->bind_param("i", $id);

$stmt->execute();

$res = $stmt->get_result()->fetch_all();

$conn->close();

print_r($res);
