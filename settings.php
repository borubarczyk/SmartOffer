<?php
include './header.php'
?>

<section >

    <div class="info-page-general">

        <div class="info-page-sides">
                <img src="./img/faces-ui/001-man.svg">
            <div class="text-info">
                <p id="settings-name"><?php echo($name)?></p></br>
                <p id="header-info">Ostatnia próba logowania</p>
                <p><?php echo($date)?></p></br>
                <p id="header-info">Ostatnia udane logowanie</p>
                <p><?php echo($date_correct)?></p></br>
            </div>
        </div>

        <div class="info-page-sides">
            <div class="input-group">
                <form action="save-data.php" method="POST">
                <lablel class="label">E-mail</lablel>
                <input class="input-style" value="<?php echo($mail)?>" type="mail" tabindex="1">
                <p><br></p>
                <lablel class="label">Login</lablel>
                <input class="input-style" value="<?php echo($login)?>" type="text" tabindex="2">
                <p><br></p>
                <label class="label">Zmień hasło</label>
                <input class="input-style" minlength="4" maxlength="18" type="password" tabindex="3" autocomplete="new-password">
                <p><br></p>
                <label class="label">Powtórz hasło</label>
                <input class="input-style" minlength="4" maxlength="18" autocomplete="new-password" type="password" tabindex="4">
                <p><br></p>
                <button class="add-form-button" name="submit" type="submit" tabindex="5">Zapisz zmiany</button>
                </form>
            </div>
        </div>

    </div>

</section>

<?php 
include './footer.php'
?>