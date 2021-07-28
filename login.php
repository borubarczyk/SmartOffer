<?php
include './functions/login_mecha.php';
?>
<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
        <script src="./scripts/script.js"></script>
        <meta charset="utf-8">
        <title>Smart Offers </title>
        <link rel="stylesheet" href="./css/style.css">
        <link rel="shortcut icon" href="./img/cube.svg">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    </head>
    <body>
    <div class="se-pre-con"></div>
        <header>
            <nav >
                <img src="./img/cube.svg">
                <p title="Smart Offer" id="login-page-link" >SmartOffer | Login</p>
            </nav>
        </header>
    <section>
        <div class="wrapper-input-small">
            <form method="post">
                <div id="col-login-pass">
                            <div class="input-group">
                                <label class="label">Login</label>
                                <input class="input-style" type="text" name="username" autocomplete="off" spellcheck="false" > </div>
                        </div>
                <div id="col-login-pass">
                            <div class="input-group">
                                <label class="label">Hasło</label>
                                <input class="input-style" type="password" name="password" autocomplete="off" spellcheck="false"> </div>
                </div>
                <div class="add-form-button-wrapper">
						<button class="add-form-button" name="submit" type="submit"  tabindex="6">Zaloguj</button>
					</div>
            </form>
        </div>
    </section>
<?php
include_once './footer.php';
?>