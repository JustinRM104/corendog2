<?php $this->layout('default'); ?>

<!-- Title -->

<?php $this->start('title'); ?>
<?php echo "Inschrijven"; ?>
<?php $this->stop(); ?>

<!-- Content -->

<?php $this->start('cont'); ?>

<h1 id="loginTitle">Word een vrijwilliger!</h1>
<p id="loginSub">Maak een gratis account aan en help mensen!</p>

<form class="lr_form" action="<?php echo url("register.process") ?>" method="post">
    <div class="lr_form_group">
        <div>
            <h4>Voornaam<span>*</span></h4>
            <input type="text" name="firstname" autocomplete="given-name" placeholder="Voornaam" required value="<?php echo input('firstname'); ?>">
        </div>
        <div>
            <h4>Achternaam<span>*</span></h4>
            <input type="text" name="lastname" autocomplete="family-name" placeholder="Achternaam" required value="<?php echo input('lastname'); ?>">
        </div>
        <div>
            <h4>Leeftijd<span>*</span></h4>
            <input type="date" name="date-born" autocomplete="bday" required>
        </div>
        <div>
            <h4>Selecteer regio</h4>
            <select name="location" required>
                <option value="nh" default>Noord-Holland</option>
                <option value="zh">Zuid-Holland</option>
                <option value="lb">Limburg</option>
                <option value="gr">Groningen</option>
                <option value="dr">Drenthe</option>
                <option value="zl">Zeeland</option>
                <option value="ut">Utrecht</option>
                <option value="nb">Noord-Brabant</option>
                <option value="ov">Overijssel</option>
                <option value="fl">Flevoland</option>
                <option value="gl">Gelderland</option>
                <option value="fr">Friesland</option>
            </select>
        </div>
    </div>

    <div class="lr_form_group">
        <div>
            <h4>Email<span>*</span></h4>
            <input type="email" name="email" autocomplete="email" placeholder="Email" required value="<?php echo input('email'); ?>">
            <?php if (isset($errors['email'])) : ?>
                <p style="color: red; font-family: sans-serif;"><?php echo $errors['email']; ?></p> 
            <?php endif; ?>
        </div>
        <div>
            <h4>Wachtwoord<span>*</span></h4>
            <input type="password" name="password" autocomplete="new-password" class="hasMore" placeholder="Wachtwoord" required>
            <input type="password" name="confirmed-password" autocomplete="off" placeholder="Bevestig Wachtwoord" required>
            <?php if (isset($errors['password'])) : ?>
                <p style="color: red; font-family: sans-serif;"><?php echo $errors['password']; ?></p> 
            <?php endif; ?>
        </div>
    </div>

    <?php if (isset($errors['unknown'])) : ?>
        <p style="color: red; font-family: sans-serif;"><?php echo $errors['unknown']; ?></p> 
    <?php endif; ?>

    <input type="submit" value="Voltooi registratie" class="submit">
</form>

<?php $this->stop(); ?>