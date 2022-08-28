<?php

/**
 * A page controller to bootstrap, prepare and render the response.
 */

// Always use strict mote
declare(strict_types=1);

// Bootstrap the application and load the essentials
require "../config/bootstrap.php";

$data["title"] = "Ta bort";


$data["main"] = <<<EOD
<h2 class = "mainh2">Bilder</h2>
EOD;
$data["aside"] = <<<EOD
<h2 class = "aside-text">Artiklar</h2>
EOD;


$obj = "";
$objLength = range(1, rowsInTable("Object"));

$articles = "";
$articleLength = range(1, rowsInTable("Article"));

foreach ($objLength as $id) {
    $obj .= renderToString("../view/db-obj-to-delete.php", ["id" => $id, "subfolder" => "80"]);
}

foreach ($articleLength as $id) {
    $articles .= renderToString("../view/db-title-to-delete.php", ["id" => $id]);
}




// Prepare the data variables
$data["main"] .= $obj;
$data["aside"] .= $articles;


// Render data variables onto a page layout to create the web page
render("layout/base", $data);
