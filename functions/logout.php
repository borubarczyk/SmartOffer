<?php
include 'C:/xampp/htdocs/SmartOffer/functions/sqlquerry.php';
include 'C:/xampp/htdocs/SmartOffer/functions/login_check.php';
session_start();

if(isset($_SESSION['UserID'])){
    database_operations('query',NULL,"UPDATE users SET date_correct = CURRENT_TIMESTAMP WHERE UserName = '$username'",NULL,NULL,1);
    unset($_SESSION['UserID']);
}
header("Location: ../index.php");
die;
?>