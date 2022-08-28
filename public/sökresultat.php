<?php

declare(strict_types=1);

require "../config/config.php";

$data["title"] = "Sökresultat";
// $obj = $_GET['obj'] ?? null;
// $articles = $_GET['articles'] ?? null;
$search = '%' . $_GET['search'] . '%' ?? "%%";

$data["main"] = <<<EOD
<h2>Bildresultat</h2>
EOD;
$data["aside"] = <<<EOD
<h2 class = "aside-text">Artikelresultat</h2>
EOD;

$obj = "";
$articles = "";

if ($search) {
    // Connect to the database
    $dsn = "sqlite:../db/bmo.sqlite";
    $db = connectToDatabase($dsn);

    // Create the SQL statement FOR OBJECT!!!
    $sql = <<<EOD
    SELECT
        *
    FROM Object
    WHERE
        id LIKE ? OR
        title LIKE ? OR
        category LIKE ? OR
        text LIKE ?
    ;
    EOD;

    // Prepare the SQL statement so it can be executed
    $stmt = $db->prepare($sql);

    // Execute the SQL statement towards the database
    $args = [$search, $search, $search, $search];
    $stmt->execute($args);

    // Get the resultset
    $resObj = $stmt->fetchAll();
    if ($resObj) {
        foreach ($resObj as $row) {
            $obj .= renderToString("../view/db-obj-extract.php", ["id" => $row["id"], "subfolder" => "550"]);
        }
    } else {
        $obj = <<<EOD
        <p>Inga bilder funna.</p>
        EOD;
    }




    // Create the SQL statement FOR ARTICLES!!!!
    $sql = <<<EOD
    SELECT
        *
    FROM Article
    WHERE
        id LIKE ? OR
        title LIKE ? OR
        category LIKE ? OR
        content LIKE ?
    ;
    EOD;

    // Prepare the SQL statement so it can be executed
    $stmt = $db->prepare($sql);

    // Execute the SQL statement towards the database
    $args = [$search, $search, $search, $search];
    $stmt->execute($args);

    // Get the resultset
    $resArticle = $stmt->fetchAll();
    if ($resArticle) {
        foreach ($resArticle as $row) {
            $articles .= renderToString("../view/db-article-search-extract.php", ["id" => $row["id"]]);
        }
    } else {
        $articles = <<<EOD
        <p>Inga artiklar funna.</p>
        EOD;
    }
} else {
    $obj = <<<EOD
    <p> Du har inte gjort någon sökning </p>
    EOD;
    $articles = <<<EOD
    <p> Du har inte gjort någon sökning </p>
    EOD;
}





$data["main"] .= $obj;
$data["aside"] .= $articles;


render("../view/layout/base.php", $data);
