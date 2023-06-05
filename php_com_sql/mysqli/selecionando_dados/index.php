<?php
$conn = new mysqli("localhost", "root", "", "cursophp");

$query = "SELECT * FROM itens";

$res = $conn->query($query);

$conn->close();

$item = $res->fetch_assoc();
$items = $res->fetch_all();

// print_r($item);
echo "<br>";

print_r($items);
