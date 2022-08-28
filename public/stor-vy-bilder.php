<?php

declare(strict_types=1);

require "../config/config.php";

$data["title"] = "Stor vy";

// Get details from the query string
$id = $_GET['id'] ?? 1;
$imgLength = rowsInTable("Object");

// Get row with next and previous id
$previous = ($id - 1 < 1) ? $imgLength : ($id - 1);
$next = ($id + 1 > $imgLength) ? 1 : ($id + 1);

$obj = renderToString("../view/db-obj-extract-big.php", ["id" => $id, "subfolder" => "full-size", "next" => $next]);

$pilar = <<<EOD
<figure class = "arrow-fig">
<a class = "arrow-a" href="../public/stor-vy-bilder.php?id=$previous">
    <img class = "arrow" src="../public/img/erik/pilVänster.png" alt="">
</a>
<a class = "arrow-a" href="../public/stor-vy-bilder.php?id=$next">
    <img class = "arrow" src="../public/img/erik/pilHöger.png" alt="">
</a>
</figure>
EOD;


$data["main"] = $obj . $pilar;



render("../view/layout/base-only-main.php", $data);
