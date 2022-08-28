<?php

/**
 * A template file, to use when rendering a view.
 * Use as little as possible logic here, only render the
 * variables that are "sent" to the view. Programming logic
 * should be done in the page controller.
 */

declare(strict_types=1);

require "../config/config.php";

$search = $_POST['search'] ?? null;



// Redirect to a result page
header("Location: ../public/sökresultat.php?search=$search");


// $obj = "";
// $articles = "";

// if ($search) {
//     // Connect to the database
//     $dsn = "sqlite:../db/bmo.sqlite";
//     $db = connectToDatabase($dsn);

//     // Create the SQL statement FOR OBJECT!!!
//     $sql = <<<EOD
//     SELECT
//         *
//     FROM Object
//     WHERE
//         id LIKE ? OR
//         title LIKE ? OR
//         category LIKE ? OR
//         text LIKE ?
//     ;
//     EOD;

//     // Prepare the SQL statement so it can be executed
//     $stmt = $db->prepare($sql);

//     // Execute the SQL statement towards the database
//     $args = [$search, $search, $search, $search];
//     $stmt->execute($args);

//     // Get the resultset
//     $resObj = $stmt->fetchAll();
//     if ($resObj) {
//         foreach ($resObj as $row) {
//             $obj .= renderToString("../view/db-obj-extract.php", ["id" => $row["id"], "subfolder" => "550"]);
//         }
//     } else {
//         $obj = <<<EOD
//         <p>Inga bilder funna.</p>
//         EOD;
//     }




//     // Create the SQL statement FOR ARTICLES!!!!
//     $sql = <<<EOD
//     SELECT
//         *
//     FROM Article
//     WHERE
//         id LIKE ? OR
//         title LIKE ? OR
//         category LIKE ? OR
//         content LIKE ?
//     ;
//     EOD;

//     // Prepare the SQL statement so it can be executed
//     $stmt = $db->prepare($sql);

//     // Execute the SQL statement towards the database
//     $args = [$search, $search, $search, $search];
//     $stmt->execute($args);

//     // Get the resultset
//     $resArticle = $stmt->fetchAll();
//     if ($resArticle) {
//         foreach ($resArticle as $row) {
//             $articles .= renderToString("../view/db-article-search-extract.php", ["id" => $row["id"]]);
//         }
//     } else {
//         $articles = <<<EOD
//         <p>Inga artiklar funna.</p>
//         EOD;
//     }
// } else {
//     $obj = <<<EOD
//     <p> Du har inte gjort någon sökning </p>
//     EOD;
//     $articles = <<<EOD
//     <p> Du har inte gjort någon sökning </p>
//     EOD;
// }

// // Redirect to a result page
// header("Location: ../public/sökresultat.php?objects=$obj&articles=$articles");
