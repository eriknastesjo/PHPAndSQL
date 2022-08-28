<?php

declare(strict_types=1);

require "../config/config.php";

$data["title"] = "Om";


// $articles = "";
// $articleList = [1, 2];

// får av någon anledning inte fram "Om BMO på detta sättet...
// foreach($articleList as $id){
//     $articles = renderToString("../view/db-about-extract.php", ["id" => $id]);
// }

$articles = renderToString("../view/db-about-extract.php", ["id" => 1]);
$articles .= renderToString("../view/db-about-extract.php", ["id" => 2]);

//$imgKvinna = renderToString("../view/db-obj-extract.php", ["id" => 45, "subfolder" => "Maggy"]);
$imgKvinna = <<<EOD
<figure>
    <img src="../public/img/maggy/sorgesloja.jpg" alt="Sorgeslöja">
</figure>
EOD;



$data["main"] = $articles;
$data["aside"] = $imgKvinna;




render("../view/layout/base.php", $data);
