<?php
include_once __DIR__ . "/_vars.php";
?>
<!doctype html>
<html class="no-js" lang="bs-BA">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Front</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" sizes="57x57" href="./assets/media/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/assets/media/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/assets/media/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/assets/media/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/assets/media/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/assets/media/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/assets/media/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/assets/media/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/assets/media/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/assets/media/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/assets/media/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/assets/media/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/assets/media/favicon-16x16.png">
        <link rel="manifest" href="/assets/media/manifest.json">
        <meta name="msapplication-TileColor" content="#fff">
        <meta name="msapplication-TileImage" content="/assets/media/ms-icon-144x144.png">
        <meta name="theme-color" content="#fff">
        <!-- share -->
        <meta name="description" content="Front" />
        <meta property="og:title" content="Front" />
        <meta property="og:description" content="Front" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="" />
        <meta property="og:image" content="/assets/media/share.jpg" />
        <!-- css -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/assets/css/app.css<?php echo $assets_version ?>">
        <link rel="stylesheet" href="/assets/fotns/sprite.svg">
    </head>
    <body>
        <!-- start: header -->
        <header class="header">
            <?php include_once __DIR__ . "/_nav.php"; ?>
        </header>
        <!-- end: header -->

        <!-- start: page content -->
        <div class="main">
            <?php include_once $file; ?>
        </div>
        <!-- end: page content -->

        <!-- start: footer -->
        <footer class="footer">

        </footer>
        <!-- end: footer -->

        <!-- start: javascript -->
        <script type="text/javascript" src="/assets/js/app.js<?php echo $assets_version ?>"></script>
    </body>
</html>
