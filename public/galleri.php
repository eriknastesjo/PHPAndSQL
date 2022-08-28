<?php

declare(strict_types=1);

require "../config/config.php";

$data["title"] = "Galleri";

// Get details from the query string
$id = $_GET['id'] ?? 1;
$imgLength = rowsInTable("Object");

// Get current, next and previous rows
$objList = followingFour((int)$id, $imgLength);
$previous = $id - 4;
if ($previous == 0) {
    $previous = 1;
} elseif ($previous < 0) {
    $previous = $imgLength + $previous;
}
$next = ($id + 4) % $imgLength;
if ($next == 0) {
    $next = 1;
}

$obj = "";

foreach ($objList as $id) {
    $obj .= renderToString("../view/db-gallery-extract.php", ["id" => $id, "subfolder" => "250"]);
}

$obj = renderToString("../view/flex-container.php", ["flexitem" => $obj]);

// sätt pilar som inline-block och centrera genom text-align: center + width: 40px
$pilar = <<<EOD
<figure class = "arrow-fig">
<a class = "arrow-a" href="../public/galleri.php?id=$previous">
    <img class = "arrow" src="../public/img/erik/pilVänster.png" alt="">
</a>
<a class = "arrow-a" href="../public/galleri.php?id=$next">
    <img class = "arrow" src="../public/img/erik/pilHöger.png" alt="">
</a>
</figure>
EOD;

$data["main"] = $obj . $pilar;


render("../view/layout/base-only-main.php", $data);
