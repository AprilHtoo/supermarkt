<?php

include_once ($_SERVER['DOCUMENT_ROOT'] . '/school2de/supermarkt/class/db_config.php');
include_once ($_SERVER['DOCUMENT_ROOT'] . '/school2de/supermarkt/class/DatabaseConnection.php');
include_once ($_SERVER['DOCUMENT_ROOT'] . '/school2de/supermarkt/class/ProductHandler.php');


if (isset($_GET['artId'])) {
    $artId = $_GET['artId'];

    $productQueryHandler = new ProductHandler($database->getConnection());

    $productQueryHandler->deleteProduct($artId);
}


