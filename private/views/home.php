<?php $template_engine = get_template_engine(); ?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?php echo site_url('/css/master.css') ?>">
    <link rel="stylesheet" href="<?php echo site_url('/css/nav.css') ?>">

    <title>Uitlaatservice - Corendog</title>
</head>
<body>
    <?php echo $template_engine->render('nav'); ?>
</body>
</html>

