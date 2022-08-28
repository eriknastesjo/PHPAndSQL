<?php

/**
 * A page controller to bootstrap, prepare and render the response.
 */

// Always use strict mote
declare(strict_types=1);

// Bootstrap the application and load the essentials
require "../config/bootstrap.php";


// Get details from the query string
$id = $_GET['id'] ?? null;

$article = renderToString("../view/db-article-extract-big.php", ["id" => $id]);

$buttons = <<<EOD
<h2> Ta bort artikel? </h2>
<form method="post" action="../view/process-delete-article.php">
    <fieldset class="search-form">
        <p>
            <input type= "hidden" name = "id" value=$id >
            <input type="submit" name="yes" value="Ja" class = "arrow">
            <input type="submit" name="no" value="Nej" class = "arrow">
        </p>
    </fieldset>
</form>
EOD;

// Prepare the data variables
$data["title"] = "Ta bort";
$data["main"] = $article . $buttons;


// Render data variables onto a page layout to create the web page
render("layout/base-only-main", $data);
