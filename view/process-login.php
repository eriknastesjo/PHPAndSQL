<?php

/**
 * A template file, to use when rendering a view.
 * Use as little as possible logic here, only render the
 * variables that are "sent" to the view. Programming logic
 * should be done in the page controller.
 */

declare(strict_types=1);

require "../config/config.php";

$user = $_POST["user"] ?? null;
$password = $_POST["password"] ?? null;
$doit = $_POST["doit"] ?? null;

if (($user === "doe" && $password === "doe") || ($user === "admin" && $password === "admin")) {
    $_SESSION["admin"] = $user;
    // Redirect to a result page
    header("Location: ../public/index.php");
} else {
    // Redirect to a result page
    header("Location: ../public/login.php");
}
