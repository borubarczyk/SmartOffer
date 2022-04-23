<?php
include DBH;
include FUNCTIONS;
session_start();

if (isset($_SESSION['logged_in'])) {
    header("Location: ./index.php");
    die;
} elseif ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (isset($username) && isset($password) && $username != "" && $password != "") {

        $querry_user_data = "SELECT users.* , img.ImgName FROM `users` JOIN img ON users.ImgID = img.ImgID WHERE `UserLogin` = '$username' AND `UserBlocked` = '0' LIMIT 1; ";

        $response = mysqli_query(CONN, $querry_user_data);

        if ($response  != false && mysqli_num_rows($response) == 1) {

            $response = mysqli_fetch_array($response);

            if ($response[`UserActive`] === `0` ) {

                if ($response['UserPassword'] === $password) {

                    $_SESSION['logged_in'] = "true";
                    session_data($response);
                    update_logger($_SESSION['ID'], 1, "User has logged in | " . $_SERVER['REMOTE_ADDR'], 16);
                    update_user_logger($username, "login", NULL);
                    update_user_logger($username, "active", NULL);

                    header("Location: index.php");
                } elseif ($response['UserPassword'] != $password) {

                    update_logger($response['UserID'], 2, "User try to login but password was incorect in | " . $_SERVER['REMOTE_ADDR'], 16);
                    update_user_logger($username, "fail", $_SERVER['REMOTE_ADDR']);
                    header("Location: login.php");
                    //return "Niepoprawne dane logowania";
                }
            }
            else {
            
                update_logger(2, 2, "User $username try to login in new session acces was denied | " . $_SERVER['REMOTE_ADDR'], 16);
                header("Location: login.php");
                //return "Zalogowany w innym miejscu";
            }
        } else {

            update_logger(2, 3, "User Unknown try to login as $username but faild | " . $_SERVER['REMOTE_ADDR'], 16);
            header("Location: login.php");
            //return "Niepoprawne dane logowania";
        }
    }
}
