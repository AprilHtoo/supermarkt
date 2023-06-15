<?php
include_once "DatabaseConnection.php";

$host = 'localhost';
$dbname = 'supermarkt';
$user = 'root';
$password = '';

$database = new DatabaseConnection($host, $dbname, $user, $password);
$database->connect();

$pdo = $database->getConnection();


