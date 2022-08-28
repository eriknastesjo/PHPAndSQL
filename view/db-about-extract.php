<?php

/*
A template template for extracting content from database.
*/

$id = $id ?? null;


if (!$id) {
    die("Något gick fel när sidan försökte hämtas.");
} else {
    // Create a DSN for the database using its filename
    $dsn = "sqlite:../db/bmo.sqlite";
    $db = connectToDatabase($dsn); //$db består av "PDO-kopplingen" till databasen (inte databasen i sig)

    // Create the SQL statement
    $sql = <<<EOD
    SELECT
        *
    FROM About
    WHERE
        id = ?
    ;
    EOD;

    // Prepare the SQL statement so it can be executed
    $stmt = $db->prepare($sql);

    // Execute the SQL statement towards the database
    $args = [$id];
    $stmt->execute($args);

    // Get the resultset
    $res = $stmt->fetch();
}

?>

<section id="<?= $res["id"] ?>">
    <h3>
        <?= $res["title"] ?>
    </h3>
    <?= $res["content"] ?>
</section>