<?php $this->layout('default'); ?>

<!-- Title -->

<?php $this->start('title'); ?>
<?php echo "Bedankt"; ?>
<?php $this->stop(); ?>

<!-- Content -->

<?php $this->start('cont'); ?>

<?php if ($showNavigation) { include('nav.php'); } ?>

<h2 id="title">Bedankt!</h2>
<p id="contactSub">U heeft succesvol uw account aangemaakt! <a href="<?php echo site_url("/login") ?>">Klik hier</a> om in te loggen of ga terug naar <a href="<?php echo site_url("/home") ?>">home.</a></p>
<div class="extraBottomMargin"></div>

<?php if ($showFooter) { include('footer.php'); } ?>

<?php $this->stop(); ?>