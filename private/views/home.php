<?php $this->layout('default'); ?>

<!-- Title -->

<?php $this->start('title'); ?>
<?php echo "Home"; ?>
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

