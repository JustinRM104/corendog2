<nav>
    <h2><a href="<?php echo url('home') ?>">CORENDOG</a></h2>
    <ul>
        <li><a href="<?php echo url('home') ?>">Vind vrijwilliger</a></li>
        <li><a href="<?php echo url('contact') ?>">Contact</a></li>

        <?php

        if (loginCheck()) {
            ?>

            <li><a href="<?php echo url('logout') ?>">Uitloggen</a></li>
            <li><button id="myProfile" value="<?php echo $_SESSION['user_id']; ?>">Mijn profiel</button></li>
            
            <?php
        } else {
            ?>

            <li><a href="<?php echo url('login.form') ?>">Login</a></li>
            <li><a href="<?php echo url('register.form') ?>">Word vrijwilliger</a></li>

            <?php
        }
        ?>
    </ul>
</nav>