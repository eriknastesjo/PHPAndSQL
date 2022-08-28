<?php

declare(strict_types=1);

require "../config/config.php";

$data["title"] = "login";



$loginForm = <<<EOD
<h2>Logga in</h2>
<form method="post" action="../view/process-login.php">
    <fieldset class="search-form">
        <p>
            <input type="text" name="user" placeholder="username">
            <input type="password" name="password" placeholder="password">
            <input type="submit" name="doit" value="Logga in">
        </p>
    </fieldset>
</form>
EOD;

$img = <<<EOD
<figure>
    <img src="../public/img/maggy/begravning_1800.jpg" alt="begravning">
</figure>
EOD;



$data["main"] = $loginForm;
$data["aside"] = $img;




render("../view/layout/base.php", $data);
