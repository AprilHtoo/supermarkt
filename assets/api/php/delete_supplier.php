<?php

include_once ($_SERVER['DOCUMENT_ROOT'] . '/school2de/supermarkt/class/db_config.php');
include_once ($_SERVER['DOCUMENT_ROOT'] . '/school2de/supermarkt/class/DatabaseConnection.php');
include_once ($_SERVER['DOCUMENT_ROOT'] . '/school2de/supermarkt/class/SupplierHandler.php');


if (isset($_GET['levId'])) {
    $levId = $_GET['levId'];

    $SupplierQueryHandler = new SupplierHandler($database->getConnection());

    $SupplierQueryHandler->deleteSupplier($levId);
}


