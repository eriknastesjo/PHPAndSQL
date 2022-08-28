<?php

/**
 * A template file, to use when rendering a view.
 * Use as little as possible logic here, only render the
 * variables that are "sent" to the view. Programming logic
 * should be done in the page controller.
 */

// Check if user is loged in
$admin = $_SESSION["admin"] ?? null;

$items = [
    "Start" => "index.php",
    "Bilder" => "bilder.php",
    "Galleri" => "galleri.php",
    "Artiklar" => "artiklar.php",
    "Om" => "om.php",
    // "Ta bort artikel yes or no" => "ta-bort-artikel.php",
    // "Ta bort bild yes or no" => "ta-bort-bild.php",
    //"Lägg till" => "lägg-till.php"
];

if ($admin) {
    $items["Lägg till"] = "lägg-till.php";
    $items["Ta bort"] = "ta-bort.php";
    $items["Logga ut"] = "logout.php";
} else {
    $items["Logga in"] = "login.php";
}


$curPage = basename($_SERVER["REQUEST_URI"]);

?>


<nav>
    <?php foreach ($items as $key => $val) :
        $selected = ($curPage === $val) ? "selected" : null;
        ?>
        <a class="<?= $selected ?>" href="<?= $val ?>"><?= $key ?></a>
    <?php endforeach; ?>
</nav>