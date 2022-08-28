<?php

/**
 * A template file, to use when rendering a view.
 * Use as little as possible logic here, only render the
 * variables that are "sent" to the view. Programming logic
 * should be done in the page controller.
 */

$lastSearch = $_GET["search"] ?? "";
// $doit = $_GET['doit'] ?? null;
// $query = $_GET['search'] ?? null;
// $query = htmlentities($query) ?? null;

?>

<!-- <form>
    <fieldset class="search-form">
        <p>
            <input type="text" name="search" placeholder="Sök här, % är jokertecken" value="<?= $query ?>">
            <input type="submit" name="doit" value="Sök">
        </p>
    </fieldset>
</form> -->

<form method="post" action="../view/process-search.php">
    <fieldset class="search-form">
        <p>
            <input type="text" name="search" placeholder="Sök på bilder och artiklar" value="<?= $lastSearch ?>">
            <input type="submit" name="doit" value="Sök">
        </p>
    </fieldset>
</form>