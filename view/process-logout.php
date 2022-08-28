<?php

/**
 * A template file, to use when rendering a view.
 * Use as little as possible logic here, only render the
 * variables that are "sent" to the view. Programming logic
 * should be done in the page controller.
 */

declare(strict_types=1);

require "../config/config.php";

$doit = $_POST["doit"] ?? null;

if ($doit) {
    $_SESSION["admin"] = null;
    header("Location: ../public/login.php");
} else {
    header("Location: ../public/login.php");
}
