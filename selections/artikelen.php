<a href="../index.php">Home</a><br>
<?php
include_once "../class/db_config.php";
include_once "../class/DatabaseConnection.php";
include_once "../class/ProductHandler.php";

$productQueryHandler = new ProductHandler($database->getConnection());
$products = $productQueryHandler->getProducts();


echo '<table class="artikel-table">';
    echo '<tr>';
    echo '<th>Artikel ID</th>';
    echo '<th>Leveranciers ID</th>';
    echo '<th>Beschrijving</th>';
    echo '<th>Aantal voorraad</th>';
    echo '<th>Min Aantal</th>';
    echo '<th>Max Aantal</th>';
    //echo '<th>Actions</th>';
    echo '</tr>';

// Output the results
foreach ($products as $product) {
   // echo "artId: {$product['artId']}<br> levId: {$product['levId']}<br> artOmschrijving: {$product['artOmschrijving']}<br> artVoorraad: {$product['artVoorraad']}<br> artMinVoorraad: {$product['artMinVoorraad']}<br> artMaxVoorraad: {$product['artMaxVoorraad']}<br>";
    echo '<tr>';
        echo '<td>' . $product['artId'] . '</td>';
        echo '<td>' . $product['levId'] . '</td>';
        echo '<td>' . $product['artOmschrijving'] . '</td>';
        echo '<td>' . $product['artVoorraad'] . '</td>';
        echo '<td>' . $product['artMinVoorraad'] . '</td>';
        echo '<td>' . $product['artMaxVoorraad'] . '</td>';
        echo '<td>';
        echo '<button class="button button-update" onclick="openUpdateModal(' . $product['artId'] . ')">Update</button>';
        echo '<button class="button button-delete" onclick="deleteArtikel(' . $product['artId'] . ')">Delete</button>';
        echo '</td>';
        echo '</tr>';

    echo '</table>';
    echo '<br>';

}

