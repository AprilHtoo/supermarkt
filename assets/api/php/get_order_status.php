<?php
include_once ($_SERVER['DOCUMENT_ROOT'] . '/school2de/supermarkt/class/db_config.php');
include_once ($_SERVER['DOCUMENT_ROOT'] . '/school2de/supermarkt/class/DatabaseConnection.php');
include_once ($_SERVER['DOCUMENT_ROOT'] . '/school2de/supermarkt/class/SalesHandler.php');

$verOrdId = $_GET['verOrdId'];
$salesQueryHandler = new SalesHandler($database->getConnection());

if (isset($_GET['verOrdId'])) {
    $verOrdId = $_GET['verOrdId'];

    $orderDetails = $salesQueryHandler->getOrderById($verOrdId);
    $verOrdStatus = $orderDetails['verOrdStatus'];

    echo $verOrdStatus;
}