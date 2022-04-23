<?php
    include '../locations.php';
    include DBH;
    include SESSION;

    if ($_SERVER["REQUEST_METHOD"] === "POST"){

        $password_f = $_POST['password_f'];
        $password_s = $_POST['password_s'];
        $id = $_SESSION['ID'];

        if( isset($password_f) && isset($password_s) && $password_f != "" && $password_s != "" && $password_f == $password_s){

        $update_password_user = "UPDATE `users` SET `user_password` = '$password_f' WHERE `UserID` = '$id'";

        mysqli_query(CONN,$update_password_user);
        
        header("Location: ../user-settings.php");}
        else{
            header("Location: ../user-settings.php");
        }
    }

?>