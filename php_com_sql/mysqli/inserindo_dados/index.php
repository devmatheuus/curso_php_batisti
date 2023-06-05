<?php
$conn = new mysqli("localhost", "root", "", "cursophp");

$query = "INSERT INTO itens (nome, descricao) VALUES ('Sofa', 'Muito macio')";


$conn->query($query);

$conn->close();
