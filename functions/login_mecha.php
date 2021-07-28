<?php
session_start();
include 'C:/xampp/htdocs/SmartOffer/functions/dbh.php';
$ip = $_SERVER['REMOTE_ADDR'];

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $username = $_POST['username']; 
        $password = $_POST['password'];          
        if(!empty($username) && !empty($password) && !is_numeric($username)){

            $query = "SELECT * FROM users WHERE UserName = '$username' LIMIT 1";
            $query_date = "UPDATE users SET date = CURRENT_TIMESTAMP WHERE UserName = '$username'";
            $query_correct = "UPDATE users SET date_correct = CURRENT_TIMESTAMP WHERE UserName = '$username'";
            $query_ip = "UPDATE users SET 'IP' = '$ip' WHERE UserName = '$username'";
            $result = mysqli_query($conn,$query);
            if($result)
            {
                if($result && mysqli_num_rows($result) > 0)
                {
                    $user_data = mysqli_fetch_assoc($result);                    
                    if($user_data['UserPassword'] === $password)
                    {
                        $_SESSION['UserID'] = $user_data['UserID'];
                        mysqli_query($conn,$query_correct);
                        header("Location: index.php");
                        die;
                    }
                    else{
                        mysqli_query($conn,$query_date);
                        mysqli_query($conn,$query_ip);
                        header("Location: error.html");
                    }
                }
            }

        }
    }
?>