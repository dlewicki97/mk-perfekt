<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= "$meta_title - $settings->meta_title" ?></title>
    <meta name="description" content="<?= strip_tags($meta_description) ?>">
    <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async
        href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async
        href="<?= assets() ?>css/bootstrap.min.css">
    <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async
        href="<?= assets() ?>css/mdb.min.css">
    <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async
        href="<?= assets() ?>css/style.css">
    <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async
        href="<?= assets() ?>dist/css/lightbox.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700;1,900&display=swap"
        rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async>
    <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async
        href="<?= assets() ?>dist/assets/owl.carousel.min.css">
    <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async
        href="<?= assets() ?>dist/assets/owl.theme.default.min.css">
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url() . 'uploads/' . $settings->logo; ?>" />
</head>

<body>