<?php

include_once ($_SERVER['DOCUMENT_ROOT'] . '/school2de/supermarkt/class/db_config.php');
include_once ($_SERVER['DOCUMENT_ROOT'] . '/school2de/supermarkt/class/DatabaseConnection.php');
include_once ($_SERVER['DOCUMENT_ROOT'] . '/school2de/supermarkt/class/ClientHandler.php');

$clientQueryHandler = new ClientHandler($database->getConnection());


$klantId = $_GET['klantId'];
echo $klantId;


$result = $clientQueryHandler->deleteClientAndOrders($klantId);

if ($result) {
    http_response_code(200); // Success status code
} else {
    http_response_code(500); // Internal server error status code
}



