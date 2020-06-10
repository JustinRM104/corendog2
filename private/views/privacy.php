<?php $this->layout('default'); ?>

<!-- Title -->

<?php $this->start('title'); ?>
<?php echo "Privacy"; ?>
<?php $this->stop(); ?>

<!-- Content -->

<?php $this->start('cont'); ?>

<?php if ($showNavigation) { include('nav.php'); } ?>

<h2 id="title">Privacy verklaring</h2>

<div class="privacyText">
    <h3>1) Waarborgen Privacy</h3>
    <p>Het waarborgen van de privacy van bezoekers van corendog.nl is een belangrijke taak voor ons. Daarom beschrijven we in onze privacy policy welke informatie we verzamelen en hoe we deze informatie gebruiken.</p>
</div>

<div class="privacyText">
    <h3>2) Toestemming</h3>
    <p>Door de informatie en de diensten op corendog.nl te gebruiken, gaat u akkoord met onze privacy policy en de voorwaarden die wij hierin hebben opgenomen.</p>
</div>

<div class="privacyText">
    <h3>3) Monitoren gedrag bezoeker</h3>
    <p>bezoekt, hoe deze bezoeker zich op de website gedraagt en welke pagina’s worden bezocht. Dat is een gebruikelijke manier van werken voor websites omdat het informatie oplevert op die bijdraagt aan de kwaliteit van de gebruikerservaring. De informatie die we, via cookies, registreren, bestaat uit onder meer IP-adressen, het type browser en de bezochte pagina’s.
        <br><br>Tevens monitoren we waar bezoekers de website voor het eerst bezoeken en vanaf welke pagina ze vertrekken. Deze informatie houden we anoniem bij en is niet gekoppeld aan andere persoonlijke informatie, informatie die op websites.</p>
</div>

<div class="privacyText">
    <h3>4) Gebruik van cookies</h3>
    <p>corendog.nl plaatst cookies bij bezoekers. Dat doen we om informatie te verzamelen over de pagina’s die gebruikers op onze website bezoeken, om bij te houden hoe vaak bezoekers terug komen en om te zien welke pagina’s het goed doen op de website. Ook houden we bij welke informatie de browser deelt.</p>
</div>

<?php if ($showFooter) { include('footer.php'); } ?>

<?php $this->stop(); ?>

