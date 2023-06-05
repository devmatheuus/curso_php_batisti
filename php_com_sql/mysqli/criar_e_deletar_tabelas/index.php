<?php
$conn = new mysqli("localhost", "root", "", "cursophp");

// $createTableQuery = "CREATE TABLE newTable (nome VARCHAR(100), sobrenome VARCHAR(100))";

$dropTableQuery = "DROP TABLE newTable";

$conn->query($dropTableQuery);

$conn->close();
