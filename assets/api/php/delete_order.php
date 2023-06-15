<?php

include_once ($_SERVER['DOCUMENT_ROOT'] . '/school2de/supermarkt/class/db_config.php');
include_once ($_SERVER['DOCUMENT_ROOT'] . '/school2de/supermarkt/class/DatabaseConnection.php');
include_once ($_SERVER['DOCUMENT_ROOT'] . '/school2de/supermarkt/class/SalesHandler.php');


if (isset($_GET['verOrdId'])) {
    $verOrdId = $_GET['verOrdId'];

    $salesQueryHandler = new SalesHandler($database->getConnection());

    // Call the deleteOrder() method to delete the order by verOrdId
    $salesQueryHandler->deleteOrder($verOrdId);
}


