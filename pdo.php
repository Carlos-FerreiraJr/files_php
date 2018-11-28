<?php 
require("configs.php");
$conn  = new pdo("mysql:dbname=<nome_banco>;host=<host>","<user>","<senha>");


$stmt = $conn->prepare("insert into users(<coluna1>,<coluna2>,<coluna3>) values(?,?,?)");

$user = "<valor1>";
$email = "<valor2>";
$senha = md5(uniqid(rand(),true));
$stmt->execute([$user,$email,$senha]);