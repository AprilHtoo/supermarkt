<?php
include_once ($_SERVER['DOCUMENT_ROOT'] . '/school2de/supermarkt/class/db_config.php');
include_once ($_SERVER['DOCUMENT_ROOT'] . '/school2de/supermarkt/class/DatabaseConnection.php');
include_once ($_SERVER['DOCUMENT_ROOT'] . '/school2de/supermarkt/class/ClientHandler.php');

$clientQueryHandler = new ClientHandler($database->getConnection());

$searchOption = $_GET['searchOption'];
$searchValue = $_GET['searchValue'];

$filteredClients = array();

if ($searchOption === "id") {
    $filteredClients = $clientQueryHandler->getClientsDataByFirstLetterOfId($searchValue);
} elseif ($searchOption === "name") {
    $filteredClients = $clientQueryHandler->getClientsDataByFirstLetterOfName($searchValue);
}

// Return the filtered clients as JSON
echo json_encode($filteredClients);

$database->closeConnection();

