<?php $this->layout('default'); ?>

<!-- Title -->

<?php $this->start('title'); ?>
<?php echo "Login"; ?>
<?php $this->stop(); ?>

<!-- Content -->

<?php $this->start('cont'); ?>

<?php if ($showNavigation) { include('nav.php'); } ?>

<h1 id="loginTitle">Login</h1>

<form class="lr_form" action="<?php echo url("login.process") ?>" method="post">
    <div class="lr_form_group">
        <div>
            <h4>Email</h4>
            <input type="email" name="email" autocomplete="email" value="<?php echo input('email'); ?>" required>
            <?php if (isset($errors['email'])) : ?>
                <p style="color: red; font-family: sans-serif; margin: 0; padding: 0;"><?php echo $errors['email']; ?></p> 
            <?php endif; ?>
        </div>
        <div>
            <h4>Wachtwoord</h4>
            <input type="password" name="password" autocomplete="new-password" class="hasMore" required>
            <?php if (isset($errors['password'])) : ?>
                <p style="color: red; font-family: sans-serif; margin: 0; padding: 0;"><?php echo $errors['password']; ?></p> 
            <?php endif; ?>
        </div>
    </div>

    <?php if (isset($errors['unknown'])) : ?>
        <p style="color: red; font-family: sans-serif; margin: 0; padding: 0;"><?php echo $errors['unknown']; ?></p> 
    <?php endif; ?>

    <input type="submit" value="Login" class="submit">

    <p class="extra">Nog geen account? <a href="<?php echo url('register.form') ?>">Registreer</a> hier. Of ga terug naar <a href="<?php echo url('home') ?>">home.</a></p>
</form>

<?php if ($showFooter) { include('footer.php'); } ?>

<?php $this->stop(); ?>