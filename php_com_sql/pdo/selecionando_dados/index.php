<?php
$host = "localhost";
$db = "cursophp";
$user = "root";
$pass = "";

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

$stmt = $conn->prepare("SELECT * FROM itens WHERE id = :id");

$id = 5;
$stmt->bindParam(":id", $id);
$stmt->execute();

$res = $stmt->fetch(PDO::FETCH_ASSOC);
// $res = $stmt->fetchAll(PDO::FETCH_ASSOC); //Recupera vários dados

print_r($res);

$conn = null;
