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

    <title> <?php echo $this->section('title'); ?> - Corendog</title>
</head>
<body>
    <?php echo $this->section('nav'); ?>
    <?php echo $this->section('cont'); ?>
    <?php echo $this->section('footer'); ?>
</body>
</html