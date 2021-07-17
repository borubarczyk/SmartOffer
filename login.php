<?php
session_start();
include './dbh.php';
include './functions.php';

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $username = $_POST['username']; 
        $password = $_POST['password'];

        if(!empty($username) && !empty($password) && !is_numeric($username)){

            $query = "SELECT * FROM users WHERE UserName = '$username' LIMIT 1";
            $result = mysqli_query($conn,$query);
            
            if($result)
            {
                if($result && mysqli_num_rows($result) > 0)
                {
                    $user_data = mysqli_fetch_assoc($result);
                    if($user_data['UserPassword'] === $password)
                    {
                        $_SESSION['UserID'] = $user_data['UserID'];
                        header("Location: index.php");
                        die;
                    }
                    else{
                        echo '<script>alert("Niepoprawne dane !")</script>';
                        header("Location: error.html");
                    }
                }
            }

        }
    }
?>
<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
        <script src="./script.js"></script>
        <meta charset="utf-8">
        <title>Smart Offers </title>
        <link rel="stylesheet" href="./style.css">
        <link rel="shortcut icon" href="img/icon.ico" />
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    </head>
    <body>
    <div class="se-pre-con"></div>
        <header>
            <p class="login-page">Smart Offer | Login</p>
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