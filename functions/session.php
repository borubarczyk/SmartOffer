<?php
    $user_data = verify_login($conn);
    $_SESSION;
    $name = $user_data['FullName'];
    $date = $user_data['date'];
    $date_correct = $user_data['date_correct'];
    $mail = $user_data['UserMail'];
    $pass = $user_data['UserPassword'];
    $login = $user_data['UserName'];
?>