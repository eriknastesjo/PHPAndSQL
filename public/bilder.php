<?php

declare(strict_types=1);

require "../config/config.php";

$data["title"] = "Bilder";

$data["main"] = <<<EOD
<h2>Bilder</h2>
EOD;
$data["aside"] = <<<EOD
<h2 class = "aside-text">Genväg</h2>
EOD;

$obj = "";
$shortcutObj = "";
$objLength = range(1, rowsInTable("Object"));

foreach ($objLength as $id) {
    $obj .= renderToString("../view/db-obj-extract.php", ["id" => $id, "subfolder" => "550"]);
    $shortcutObj .= renderToString("../view/db-smallobj-extract.php", ["id" => $id, "subfolder" => "80"]);
}

$data["main"] .= $obj;
$data["aside"] .= $shortcutObj;


render("../view/layout/base.php", $data);
