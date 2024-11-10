<?php 
$host = "localhost";
$user = "root";
$password = "";
$dbname = "acuña_gamedevs";
$dsn = "mysql:host={$host};dbname={$dbname}";

$pdo = new PDO($dsn, $user, $password);

?>