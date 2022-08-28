<?php

declare(strict_types=1);

require "../config/config.php";

$data["title"] = "Artiklar";

$data["main"] = <<<EOD
<h2 class = "mainh2">Artiklar</h2>
EOD;
$data["aside"] = <<<EOD
<h2 class = "aside-text">Genväg</h2>
EOD;

$articles = "";
$shortcutArticles = "";
$articleLength = range(1, rowsInTable("Article"));
// $test = var_dump(returnRowsInTable("Article"))

foreach ($articleLength as $id) {
    $articles .= renderToString("../view/db-article-extract.php", ["id" => $id]);
    $shortcutArticles .= renderToString("../view/db-titles-extract.php", ["id" => $id]);
}

$data["main"] .= $articles;
$data["aside"] .= $shortcutArticles;

render("../view/layout/base.php", $data);
