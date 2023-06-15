<?php

include_once ($_SERVER['DOCUMENT_ROOT'] . '/school2de/supermarkt/class/db_config.php');
include_once ($_SERVER['DOCUMENT_ROOT'] . '/school2de/supermarkt/class/DatabaseConnection.php');
include_once ($_SERVER['DOCUMENT_ROOT'] . '/school2de/supermarkt/class/ProductHandler.php');


if (isset($_GET['artId'])) {
    $verOrdId = $_GET['artId'];

    $productsQueryHandler = new ProductHandler($database->getConnection());

    // Call the deleteOrder() method to delete the order by verOrdId
    $productsQueryHandler->deleteArtikel($artId);
}