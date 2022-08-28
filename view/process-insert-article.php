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
$category       = $_POST["category"] ?? null;
$title       = $_POST["title"] ?? null;
$content = $_POST["content"] ?? null;
$author = $_POST["author"] ?? null;
$pubdate = $_POST["pubdate"] ?? null;
$insertArticle = $_POST["insertArticle"] ?? null;

if (!$insertArticle) {
    die("Något gick fel när du försökte ladda sidan.");
} else {
    // Connect to the database
    $dsn = "sqlite:../db/bmo.sqlite";
    $db = connectToDatabase($dsn);

    // Create the SQL statement
    $sql = <<<EOD
    INSERT INTO Article
        (category, title, content, author, pubdate)
    VALUES
        (?, ?, ?, ?, ?)
    ;
    EOD;

    // Prepare the SQL statement so it can be executed
    $stmt = $db->prepare($sql);

    // Execute the SQL statement towards the database
    $args = [$category, $title, $content, $author, $pubdate];
    $stmt->execute($args);
}



// Redirect to a result page
header("Location: ../public/lägg-till.php?insertArticle=klar");
