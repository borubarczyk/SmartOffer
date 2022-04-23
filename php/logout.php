<?php
    include "../locations.php";
    include FUNCTIONS;
    include_once SESSION;

    session_start();
    
    update_user_logger($_SESSION['login'],"logout",NULL);
    update_user_logger($_SESSION['login'],"active_none",16);
    
    UpdateUserData('UserLastPhoneID',$_SESSION['last_phone_search']);
    session_destroy();
    header("Location: ../login.php");
?>