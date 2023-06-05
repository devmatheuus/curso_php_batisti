<?php
$conn = new mysqli("localhost", "root", "", "cursophp");

$query = "SELECT * FROM itens";

$res = $conn->query($query);

print_r($res);

$conn->close();
