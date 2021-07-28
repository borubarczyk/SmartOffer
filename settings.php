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
                <p><?php echo($date)?></p>  
                <p><?php echo("IP: ".$ip)?></p></br>
                <p id="header-info">Ostatnia udane logowanie</p>
                <p><?php echo($date_correct)?></p></br>
                <p id="header-info">Adres IP</p>
                <p><?php echo($_SERVER['REMOTE_ADDR'])?></p></br>
                
            </div>
        </div>
        
        <div class="info-page-sides">
            <div class="input-group">
                <div class="warning">
                    <span>
                        <p id="warning-js" class="warning-message"></p>
                    </span>
                </div>
                <form onsubmit="return validate();" action="change_pass.php" method="POST" id="settings">
                <lablel class="label">E-mail</lablel>
                <input class="input-style" value="<?php echo($mail)?>" type="mail" tabindex="1">
                <p><br></p>
                <lablel class="label">Login</lablel>
                <input class="input-style" value="<?php echo($login)?>" type="text" tabindex="2">
                <p><br></p>
                <label class="label">Zmień hasło</label>
                <input class="input-style" minlength="4" id="password_f" maxlength="18" autocomplete="new-password" type="password" tabindex="3" require>
                <p><br></p>
                <label class="label">Powtórz hasło</label>
                <input class="input-style" minlength="4" id="password_s" maxlength="18" autocomplete="new-password" type="password" tabindex="4" require>
                <p><br></p>
                <button class="add-form-button" id="button_s" type="submit" tabindex="5">Zapisz zmiany</button>
                </form>
            </div>
        </div>
    </div>
</section>
<script src="./scripts/validation.js"></script>
<?php 
include './footer.php'
?>