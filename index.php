<?php
include_once "class/db_config.php";
include_once "class/DatabaseConnection.php";

?>

<!DOCTYPE html>
<html>
<head>
    <title>New Client Form</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
    <div class="nav">
        <header>WELCOME TO BASPROJECT</header>
        <hr>
            <div class="nav-bar">
            <a href="forms/add_client.php">Klant toevoegen</a>
            <a href="forms/add_sale.php">Verkooporder toevoegen</a>
            <a href="forms/add_inkOrder.php">Inkooporder toevoegen</a>
            <a href="selections/sales.php">Verkooporders</a>
            <a href="selections/restockProducts.php">Inkooporders</a>
            <a href="selections/artikelen.php">Producten</a>
            <a href="selections/client.php">Klanten</a>
            <a href="selections/leveranciers.php">Leveranciers</a>
        </div>
    </div>
</body>
</html>
