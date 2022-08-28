<?php

declare(strict_types=1);

require "../config/config.php";

$data["title"] = "Dokumentation";

$data["main"] = file_get_contents("../content/dokumentation.txt");

render("../view/layout/base-only-main.php", $data);
