<?php
include_once "../class/db_config.php";
include_once "../class/DatabaseConnection.php";
include_once "../class/ClientHandler.php";

$clientHandler = new ClientHandler($database->getConnection());
$clientHandler->handleFormSubmission();

$database->closeConnection();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Klant formulier</title>
</head>
<body>
<a href="../index.php">Home</a><br>
<h2>Nieuwe klant toevoegen</h2>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="name">Naam:</label>
    <input type="text" id="klantNaam" name="klantNaam" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="klantEmail" name="klantEmail" required><br><br>

    <label for="Adres">Adres:</label>
    <input type="text" id="klantAdres" name="klantAdres" required><br><br>

    <label for="Postcode">Postcode:</label>
    <input type="text" id="klantPostcode" name="klantPostcode" required><br><br>

    <label for="Woonplaats">Woonplaats:</label>
    <input type="text" id="klantWoonplaats" name="klantWoonplaats" required><br><br>

    <input type="submit" value="Submit">
</form>
</body>
</html>