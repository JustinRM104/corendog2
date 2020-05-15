<?php $template_engine = get_template_engine(); ?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?php echo site_url('/css/master.css') ?>">
    <link rel="stylesheet" href="<?php echo site_url('/css/nav.css') ?>">
    <link rel="stylesheet" href="<?php echo site_url('/css/footer.css') ?>">
    <link rel="stylesheet" href="<?php echo site_url('/css/contact.css') ?>">

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <title>Contact - Corendog</title>
</head>
<body>
    <?php echo $template_engine->render('nav'); ?>

    <h1 id="contactTitle">Neem contact op</h1>
    <p id="contactSub">Wil je contact opnemen? We horen graag van u.</p>

    <fieldset id="contactForm">
        <input type="text" name="" id="" placeholder="Naam">
        <input type="email" name="" id="" placeholder="Email">
        <textarea name="" id="" cols="30" rows="10" placeholder="Bericht"></textarea>
        <div class="g-recaptcha" data-sitekey="6LezH_cUAAAAAJ12nzkS835hPGBL7SjG7BGc_I_S"></div>
        <button id="sendContact">Verzend</button>
    </fieldset>

    <?php echo $template_engine->render('footer'); ?>
</body>
</html>

