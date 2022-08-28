<!doctype html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?? null ?> | My website</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/favicon.ico">
</head>

<body>

    <div>
        <header class="siteheader">
            <h1>Begravningsmuseum Online</h1>
        </header>
    </div>

    <div class="navbar">
        <?php require __DIR__ . "/../navbar.php" ?>
    </div>

    <div>
        <?php require __DIR__ . "/../searchform.php" ?>
    </div>

    <main class="main-only-main">
        <?php if (isset($main)) : ?>
            <?= $main ?>
        <?php else : ?>
            <p>This is default text for the page.</p>
        <?php endif; ?>
    </main>


    <footer class="sitefooter">
        <!-- <?php if (isset($footer)) : ?>
            <?= $footer ?>
             <?php else : ?>
        <p>Footer default text</p>
             <?php endif; ?> -->
    </footer>

    <script src="js/main.js"></script>
</body>

</html>