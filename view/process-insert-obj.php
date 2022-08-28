<?php

declare(strict_types=1);

require "../config/config.php";

// Check if user is loged in otherwise terminate
$admin = $_SESSION["admin"] ?? null;
if (!$admin) {
    die("Du är inte inloggad!");
}


// Get details from the posted form
// $id         = $_POST["id"] ?? null;
$title       = $_POST["title"] ?? null;
$category       = $_POST["category"] ?? null;
$text = $_POST["text"] ?? null;
$image = $_POST["image"] ?? null;
$owner = $_POST["owner"] ?? null;
$insertObj = $_POST["insertObj"] ?? null;

if (!$insertObj) {
    die("Något gick fel när du försökte ladda sidan.");
} else {
    // Connect to the database
    $dsn = "sqlite:../db/bmo.sqlite";
    $db = connectToDatabase($dsn);

    // Create the SQL statement
    $sql = <<<EOD
    INSERT INTO Object
        (title, category, text, image, owner)
    VALUES
        (?, ?, ?, ?, ?)
    ;
    EOD;

    // Prepare the SQL statement so it can be executed
    $stmt = $db->prepare($sql);

    // Execute the SQL statement towards the database
    $args = [$title, $category, $text, $image, $owner];
    $stmt->execute($args);
}



// Redirect to a result page
header("Location: ../public/lägg-till.php?insertObj=klar");
