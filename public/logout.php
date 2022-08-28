<?php

declare(strict_types=1);

require "../config/config.php";

$data["title"] = "logout";

$admin = $_SESSION["admin"] ?? null;



$loginForm = <<<EOD
<h2>Är du säker på att du vill logga ut som $admin?</h2>
<form method="post" action="../view/process-logout.php">
    <fieldset class="search-form">
        <p>
            <input type="submit" name="doit" value="Ja">
        </p>
    </fieldset>
</form>
EOD;

$img = <<<EOD
<figure>
    <img src="../public/img/maggy/likvagn_med_hast.jpg" alt="likvagn med häst">
</figure>
EOD;



$data["main"] = $loginForm;
$data["aside"] = $img;




render("../view/layout/base.php", $data);
