<?php

declare(strict_types=1);

require "../config/config.php";

// Check if user is loged in otherwise terminate
$admin = $_SESSION["admin"] ?? null;
if (!$admin) {
    die("Du är inte inloggad!");
}


// Get details from the posted form
$id         = $_POST["id"] ?? null;
$yes       = $_POST["yes"] ?? null;

if (!$id) {
    die("Något gick fel när du försökte ladda sidan.");
} elseif ($yes) {
    // Connect to the database
    $dsn = "sqlite:../db/bmo.sqlite";
    $db = connectToDatabase($dsn);

    // Create the SQL statement
    $sql = <<<EOD
    DELETE FROM Object
    WHERE id = ?
    ;
    EOD;

    // Prepare the SQL statement so it can be executed
    $stmt = $db->prepare($sql);

    // Execute the SQL statement towards the database
    $args = [$id];
    $stmt->execute($args);
}

// Reset the order of images before continuing
resetIdImg();

// Redirect to a result page
header("Location: ../public/ta-bort.php");
