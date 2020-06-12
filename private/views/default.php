<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?php echo site_url('/css/master.css') ?>">
    <link rel="stylesheet" href="<?php echo site_url('/css/nav.css') ?>">
    <link rel="stylesheet" href="<?php echo site_url('/css/footer.css') ?>">
    <link rel="stylesheet" href="<?php echo site_url('/css/contact.css') ?>">
    <link rel="stylesheet" href="<?php echo site_url('/css/privacy.css') ?>">
    <link rel="stylesheet" href="<?php echo site_url('/css/login-register.css') ?>">
    <link rel="stylesheet" href="<?php echo site_url('/css/over.css') ?>">
    <link rel="stylesheet" href="<?php echo site_url('/css/home.css') ?>">
    <link rel="stylesheet" href="<?php echo site_url('/css/userWindow.css') ?>">

    <script src="https://kit.fontawesome.com/98bf757c68.js" crossorigin="anonymous"></script>

    <title> <?php echo $this->section('title'); ?> - Corendog</title>
</head>
<body>
    <?php echo $this->section('cont'); ?>

    <script src="<?php echo site_url('/js/profile.js') ?>"></script>
    <script src="<?php echo site_url('/js/userloader.js') ?>"></script>
</body>
</html