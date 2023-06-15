<?php

include_once ($_SERVER['DOCUMENT_ROOT'] . '/school2de/supermarkt/class/db_config.php');
include_once ($_SERVER['DOCUMENT_ROOT'] . '/school2de/supermarkt/class/DatabaseConnection.php');
include_once ($_SERVER['DOCUMENT_ROOT'] . '/school2de/supermarkt/class/ProductHandler.php');

$productQueryHandler = new ProductHandler($database->getConnection());

$inkOrdId = $_GET['inkOrdId'];

$productQueryHandler->deleteInkOrder($inkOrdId);





