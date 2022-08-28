<?php

declare(strict_types=1);

require "../config/config.php";

$data["title"] = "Start";

$data["main"] = <<<EOD
<h2>Välkommen!</h2>
<article class = "start-text">
    <h4>
        Här samlar vi sådant som berör begravningsritualer, seder och bruk.
    </h4>
    <p>
        Klicka dig vidare till <a class="nav-item" href="bilder.php">Bilder</a> för att komma till utställningen.
    </p>
    <p>
        Klicka dig vidare till <a class="nav-item" href="galleri.php">Galleri</a> för att komma till galleri-vy.
    </p>
    <p>
        Klicka dig vidare till <a class="nav-item" href="artiklar.php">Artiklar</a> för att läsa om bilderna.
    </p>
    <p>
        Klicka dig vidare till <a class="nav-item" href="om.php">Om</a> för att läsa mer om detta projektet.
    </p>
</article>
EOD;

// $obj = "";
// $objList = [3, 20, 30];

// foreach ($objList as $id) {
//     $obj .= renderToString("../view/db-obj-extract.php", ["id" => $id, "maggy" => "550"]);
// }

$imgBil = <<<EOD
<a href="bilder.php">
    <figure>
        <img src="../public/img/maggy/likvagn.jpg" alt="Likvagn">
    </figure>
</a>
EOD;

//$imgBil = renderToString("../view/db-obj-extract.php", ["id" => 40, "subfolder" => "Maggy"]);

$data["aside"] = $imgBil;

render("../view/layout/base.php", $data);
