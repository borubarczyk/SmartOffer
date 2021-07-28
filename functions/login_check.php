<?php

    function verify_login($conn){
    if(isset($_SESSION['UserID']))
    {
        $id = $_SESSION['UserID'];
        $query = "SELECT * FROM users WHERE UserID = '$id' LIMIT 1";

        $result = mysqli_query($conn,$query);
        if($result && mysqli_num_rows($result)>0)
        {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }
    header("Location: ./login.php");
    die;
    }
?>