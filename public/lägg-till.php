<?php

declare(strict_types=1);

require "../config/config.php";

$data["title"] = "Lägg till";

$insertObj = $_GET['insertObj'] ?? null;
$insertArticle = $_GET["insertArticle"] ?? null;

if ($insertObj) {
    $data["main"] = <<<EOD
    <h2> Lägg till bild </h2>
    <p> Ny bild inlagd! <p>
    EOD;
} else {
    $data["main"] = "<h2>Lägg till bild</h2>";
}
if ($insertArticle) {
    $data["aside"] = <<<EOD
    <h2> Lägg till artikel </h2>
    <p> Ny artikel inlagd! <p>
    EOD;
} else {
    $data["aside"] = "<h2>Lägg till artikel</h2>";
}

$data["main"] .= renderToString("../view/insert-form-bild.php");
$data["aside"] .= renderToString("../view/insert-form-artikel.php");

render("../view/layout/base.php", $data);
