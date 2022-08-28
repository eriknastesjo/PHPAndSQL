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

$obj = renderToString("../view/db-obj-stor-vy-del.php", ["id" => $id, "subfolder" => "full-size"]);

$buttons = <<<EOD
<h2> Ta bort bild? </h2>
<form method="post" action="../view/process-delete-obj.php">
    <fieldset class="search-form">
        <p>
            <input type= "hidden" name = "id" value=$id >
            <input type="submit" name="yes" class = "arrow" value="Ja">
            <input type="submit" name="no" class = "arrow" value="Nej">
        </p>
    </fieldset>
</form>
EOD;

// Prepare the data variables
$data["title"] = "Ta bort";
$data["main"] = $obj . $buttons;


// Render data variables onto a page layout to create the web page
render("layout/base-only-main", $data);
