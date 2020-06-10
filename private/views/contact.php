<?php $this->layout('default'); ?>

<!-- Title -->

<?php $this->start('title'); ?>
Contact
<?php $this->stop(); ?>

<!-- Content -->

<?php $this->start('cont'); ?>

<?php if ($showNavigation) { include('nav.php'); echo "found";} ?>

<img class="contactImg" src="<?php echo site_url('/images/detail_images/detail_img2.png') ?>" alt="">

<h1 id="contactTitle">Neem contact op</h1>
<p id="contactSub">Wil je contact opnemen? We horen graag van u.</p>

<fieldset id="contactForm">
    <input type="text" name="" id="" placeholder="Naam" required>
    <input type="email" name="" id="" placeholder="Email" required>
    <textarea name="" cols="30" rows="10" placeholder="Bericht" required></textarea>
    <button id="sendContact">Verzend</button>
</fieldset>

<?php if ($showFooter) { include('footer.php'); } ?>

<?php $this->stop(); ?>