<?php
include_once "../class/db_config.php";
include_once "../class/DatabaseConnection.php";
include_once "../class/SalesHandler.php";
include_once "../class/ClientHandler.php";
include_once "../class/ProductHandler.php";

$productHandler = new ProductHandler($database->getConnection());
?>

    <!DOCTYPE html>
    <html>
    <head>
        <title>Create Purchase Order</title>
    </head>
    <body>
    <h2>Inkooporder aanmaken</h2>
    <a href="../index.php">Home</a><br>
    <form method="POST" action="">
        <label for="artId">Product:</label>
        <select name="artId" id="artId" required onchange="getSupplierId(this.value)">
            <option value="" disabled selected>Choose here</option>

            <?php
            $productList = $productHandler->getProducts();
            foreach ($productList as $product) {
                echo '<option value="' . $product['artId'] . '">' . $product['artOmschrijving'] . '</option>';
            }
            ?>
        </select><br><br>
        <!-- JavaScript function to get the supplier ID -->
        <script src="../assets/api/js/getIdentification.js">
        </script>

        <label for="levId">Leveranciers ID:</label>
        <input type="text" name="levId" id="levId" required readonly><br><br>

        <label for="amount">Aantal order:</label>
        <input type="number" name="amount" id="amount" required><br><br>

        <input type="submit" name="submit" value="Create Purchase Order">
    </form>
    </body>
    </html>

<?php
if (isset($_POST['submit'])) {
    $artId = $_POST['artId'];
    $amount = $_POST['amount'];

    $productHandler->createPurchaseOrder($artId, $amount);
}
?>