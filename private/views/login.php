<?php $this->layout('default'); ?>

<!-- Title -->

<?php $this->start('title'); ?>
<?php echo "Login"; ?>
<?php $this->stop(); ?>

<!-- Content -->

<?php $this->start('cont'); ?>

<h1 id="loginTitle">Login</h1>

<form class="lr_form" action="<?php echo url("login.process") ?>" method="post">
    <div class="lr_form_group">
        <div>
            <h4>Email</h4>
            <input type="email" name="email" autocomplete="email" required>
        </div>
        <div>
            <h4>Wachtwoord</h4>
            <input type="password" name="password" autocomplete="new-password" class="hasMore" required>
        </div>
    </div>

    <input type="submit" value="Login" class="submit">
</form>

<?php $this->stop(); ?>