<?php $this->layout('default'); ?>

<!-- Title -->

<?php $this->start('title'); ?>
<?php echo "Over"; ?>
<?php $this->stop(); ?>

<!-- Content -->

<?php $this->start('cont'); ?>

<?php if ($showNavigation) { include('nav.php'); } ?>

<h2 id="title">Over ons</h2>
<p id="over">

<img class="aboutImg" src="<?php echo site_url('/images/detail_images/detail_img1.jpg') ?>" alt="">

Welkom bij Corendog, het zijn moeilijke tijden met het virus Covid-19.
Hiermee zijn veel mensen bang geworden en durven veel mensen niet over straat omdat zij in het risicogroep bevinden van het virus. 
Daarom hebben wij van Corendog deze website in elkaar gezet. We zullen u uitleggen hoe de site werkt.

<br><br>

De website is in het kort een online vrijwilligers hondenuitlaatservice. 
Vrijwilligers kunnen zich aanmelden op de site hier en mensen uit de risicogroep kunnen zich opgeven hier als zij hulp nodig hebben met het uitlaten.
Heeft u extra tijd en wilt u de samenleving een hand helpen? Word dan vrijwilliger bij Corendog, 
want alleen met de hulp van de vrijwilligers kunnen wij er voor zorgen dat deze website werkt!

<br><br>

Hoe gaat het in de praktijk als vrijwilliger?
Als u zich aanmeld als vrijwilliger ontvangt u een bevestigingsmail in uw mailbox.
Als dat gelukt is bent u beschikbaar in de uw opgegeven regio!
U krijgt altijd 24 uur van te voren een mail met de informatie van de afspraak.
Kunt u niet? Neem dan contact op met degene waar de afspraak mee gemaakt is. Alle informatie staat in de mail.

<br><br>
Als u bij de afspraak komt vragen wij degene die de afspraak maakt alles goed te desinfecteren. Denk aan de riem, speeltjes etc.
Maak zelf goede afspraken met de vrijwilliger zodat alles goed duidelijk is en er zo min mogelijk misverstanden ontstaan.

<br><br>
Alleen samen kunnen wij het virus verslaan. Denk aan elkaar en help elkaar waar het kan!

<br><br>

<b>Team Corendog</b>
</p>

<?php if ($showFooter) { include('footer.php'); } ?>

<?php $this->stop(); ?>