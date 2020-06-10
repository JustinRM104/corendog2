<?php $this->layout('default'); ?>

<!-- Title -->

<?php $this->start('title'); ?>
<?php echo "Home"; ?>
<?php $this->stop(); ?>

<!-- Content -->

<?php $this->start('cont'); ?>

<?php if ($showNavigation) { include('nav.php'); } ?>

<div class="sortings">
    <div>
        <p>Sorteer op:</p>
        <select id="sort">
            <option value="name" default>Naam</option>
            <option value="rating" default>Rating</option>
        </select>
        <p>Provincie:</p>
        <select id="province">
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

<div class="users-grid">
    <div>
        <img src="https://www.wenabv.com/wp-content/uploads/2018/04/User-placeholder.jpg" alt="profiel foto">
        <h3>Naam</h3>
        <p class="rating"><span class="fas fa-star "></span>5.0 / 10.0</p>
    </div>
    <div>
        <img src="https://www.wenabv.com/wp-content/uploads/2018/04/User-placeholder.jpg" alt="profiel foto">
        <h3>Naam</h3>
        <p class="rating"><span class="fas fa-star "></span>5.0 / 10.0</p>
    </div>
    <div>
        <img src="https://www.wenabv.com/wp-content/uploads/2018/04/User-placeholder.jpg" alt="profiel foto">
        <h3>Naam</h3>
        <p class="rating"><span class="fas fa-star "></span>5.0 / 10.0</p>
    </div>
    <div>
        <img src="https://www.wenabv.com/wp-content/uploads/2018/04/User-placeholder.jpg" alt="profiel foto">
        <h3>Naam</h3>
        <p class="rating"><span class="fas fa-star "></span>5.0 / 10.0</p>
    </div>
    <div>
        <img src="https://www.wenabv.com/wp-content/uploads/2018/04/User-placeholder.jpg" alt="profiel foto">
        <h3>Naam</h3>
        <p class="rating"><span class="fas fa-star "></span>5.0 / 10.0</p>
    </div>
    <div>
        <img src="https://www.wenabv.com/wp-content/uploads/2018/04/User-placeholder.jpg" alt="profiel foto">
        <h3>Naam</h3>
        <p class="rating"><span class="fas fa-star "></span>5.0 / 10.0</p>
    </div>
    <div>
        <img src="https://www.wenabv.com/wp-content/uploads/2018/04/User-placeholder.jpg" alt="profiel foto">
        <h3>Naam</h3>
        <p class="rating"><span class="fas fa-star "></span>5.0 / 10.0</p>
    </div>
    <div>
        <img src="https://www.wenabv.com/wp-content/uploads/2018/04/User-placeholder.jpg" alt="profiel foto">
        <h3>Naam</h3>
        <p class="rating"><span class="fas fa-star "></span>5.0 / 10.0</p>
    </div>
    <div>
        <img src="https://www.wenabv.com/wp-content/uploads/2018/04/User-placeholder.jpg" alt="profiel foto">
        <h3>Naam</h3>
        <p class="rating"><span class="fas fa-star "></span>5.0 / 10.0</p>
    </div>
    <div>
        <img src="https://www.wenabv.com/wp-content/uploads/2018/04/User-placeholder.jpg" alt="profiel foto">
        <h3>Naam</h3>
        <p class="rating"><span class="fas fa-star "></span>5.0 / 10.0</p>
    </div>
    <div>
        <img src="https://www.wenabv.com/wp-content/uploads/2018/04/User-placeholder.jpg" alt="profiel foto">
        <h3>Naam</h3>
        <p class="rating"><span class="fas fa-star "></span>5.0 / 10.0</p>
    </div>
    <div>
        <img src="https://www.wenabv.com/wp-content/uploads/2018/04/User-placeholder.jpg" alt="profiel foto">
        <h3>Naam</h3>
        <p class="rating"><span class="fas fa-star "></span>5.0 / 10.0</p>
    </div>
</div>

<button id="loadMore">
    Laad meer...
</button>

<?php if ($showFooter) { include('footer.php'); } ?>

<?php $this->stop(); ?>