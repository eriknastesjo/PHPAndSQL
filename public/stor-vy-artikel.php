<?php

declare(strict_types=1);

require "../config/config.php";

$data["title"] = "Stor vy";

// Get details from the query string
$id = $_GET['id'] ?? 1;
$articleLength = rowsInTable("Article");

// Get row with next and previous id
$previous = ($id - 1 < 1) ? $articleLength : ($id - 1);
$next = ($id + 1 > $articleLength) ? 1 : ($id + 1);
// $previous = $id - 1;
// $next = $id + 1;

$obj = renderToString("../view/db-article-extract-big.php", ["id" => $id]);

 // sätt pilar som inline-block och centrera genom text-align: center + width: 40px
$pilar = <<<EOD
<figure class = "arrow-fig">
<a class = "arrow-a" href="../public/stor-vy-artikel.php?id=$previous">
    <img class = "arrow" src="../public/img/erik/pilVänster.png" alt="">
</a>
<a class = "arrow-a" href="../public/stor-vy-artikel.php?id=$next">
    <img class = "arrow" src="../public/img/erik/pilHöger.png" alt="">
</a>
</figure>
EOD;


$data["main"] = $obj . $pilar;


render("../view/layout/base-only-main.php", $data);
