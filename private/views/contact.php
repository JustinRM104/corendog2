<?php $this->layout('default'); ?>

<!-- Title -->

<?php $this->start('title'); ?>
<?php echo "Contact"; ?>
<?php $this->stop(); ?>

<!-- Navigation -->

<?php $this->start('nav'); ?>

<nav>
    <h2><a href="<?php echo site_url('/home') ?>">CORENDOG</a></h2>
    <ul>
        <li><a href="<?php echo site_url('/home') ?>">Vind vrijwilliger</a></li>
        <li><a href="<?php echo site_url('/contact') ?>">Contact</a></li>
        <li><a href="<?php echo site_url('/inschrijven') ?>">Word vrijwilliger</a></li>
    </ul>
</nav>

<?php $this->stop(); ?>

<!-- Content -->

<?php $this->start('cont'); ?>

<h1 id="contactTitle">Neem contact op</h1>
<p id="contactSub">Wil je contact opnemen? We horen graag van u.</p>

<fieldset id="contactForm">
    <input type="text" name="" id="" placeholder="Naam" required>
    <input type="email" name="" id="" placeholder="Email" required>
    <textarea name="" cols="30" rows="10" placeholder="Bericht" required></textarea>
    <button id="sendContact">Verzend</button>
</fieldset>

<?php $this->stop(); ?>

<!-- Footer -->

<?php $this->start('footer'); ?>

<footer>
    <h3>CORENDOG</h3>
    <p>© Corendon 2020</p>
    <ul>
        <li><a href="<?php echo site_url('/contact') ?>">Contact</a></li>
        <li><a href="<?php echo site_url('/privacy') ?>">Privacy verklaring</a></li>
    </ul>
</footer>

<?php $this->stop(); ?>