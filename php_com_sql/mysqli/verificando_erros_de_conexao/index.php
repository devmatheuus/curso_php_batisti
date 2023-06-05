<?php
$conn = new mysqli("localhost", "root", "", "cursophp");

if ($conn->connect_errno) {
    echo "Erro na conexão <br>";
    echo "Erro" . $conn->connect_error;
}
