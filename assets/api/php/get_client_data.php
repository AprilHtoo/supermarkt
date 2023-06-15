<?php
include_once ($_SERVER['DOCUMENT_ROOT'] . '/school2de/supermarkt/class/db_config.php');
include_once ($_SERVER['DOCUMENT_ROOT'] . '/school2de/supermarkt/class/DatabaseConnection.php');
include_once ($_SERVER['DOCUMENT_ROOT'] . '/school2de/supermarkt/class/ClientHandler.php');

$clientId = $_GET['klantId'];
$clientQueryHandler = new clientHandler($database->getConnection());

if (isset($_GET['klantId'])) {
    $verOrdId = $_GET['klantId'];

    $clientDetails = $clientQueryHandler->getKlantById($clientId);
    header('Content-Type: application/json');
    echo json_encode($clientDetails);
}