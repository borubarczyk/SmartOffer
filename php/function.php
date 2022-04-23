<?php
include_once DBH;

function session_data($user_data)
{
    $_SESSION['ID'] = $user_data['UserID'];
    $_SESSION['name'] = $user_data['UserName'];
    $_SESSION['date'] = $user_data['UserDateLast'];
    $_SESSION['date_correct'] = $user_data['UserLastSucess'];
    $_SESSION['mail'] = $user_data['UserMail'];
    $_SESSION['login'] = $user_data['UserLogin'];
    $_SESSION['ip'] = $user_data['UserLastIP'];
    $_SESSION['sex'] = $user_data['UserSex'];
    $_SESSION['token'] = $user_data['UserToken'];
    $_SESSION['img'] = $user_data['ImgName'];
    $_SESSION['last_phone_search'] = $user_data['UserLastPhoneID'];
    $_SESSION['num_of_devices'] = 6549;
    $_SESSION['num_of_users'] = 11;
    $_SESSION['num_of_series'] = 87;
    $_SESSION['num_of_products'] = 7987;
}

function update_user_data()
{
    $id = $_SESSION['ID'];

    $user_data_querry = "SELECT users.* , img.ImgName FROM `users` JOIN img ON users.ImgID = img.ImgID WHERE `UserID` = '$id' AND `UserBlocked` = '0' LIMIT 1; ";

    $user_update_data_result = mysqli_query(CONN, $user_data_querry);

    if ($user_update_data_result != false) {
        $user_update_data_result = mysqli_fetch_array($user_update_data_result);
        session_data($user_update_data_result);
    }
}

function update_logger($id, $type, $text, $premmsion)
{
    $insert_logger_entry_querry = "INSERT INTO `logs` ( `UserID`, `LogsTypeOfInfo`, `LogsText`, `LogsDate`, `LogsPremmsions`) VALUES ( $id , $type , '$text' , current_timestamp() , $premmsion )";
    try {
        mysqli_query(CONN, $insert_logger_entry_querry);
    } catch (mysqli_sql_exception $error) {
        var_dump($error);
        exit;
    }
}

function update_user_logger($username, $type, $ip)
{

    $update_last_login_fail = "UPDATE `users` SET `UserDateLast` = CURRENT_TIMESTAMP , `UserLastIP` = '$ip' WHERE `UserLogin` = '$username'";
    $update_last_login_correct = "UPDATE `users` SET `UserLastSucess` = CURRENT_TIMESTAMP  WHERE `UserLogin` = '$username'";
    $update_last_login_activity = "UPDATE `users` SET `UserLastSucess` = CURRENT_TIMESTAMP WHERE `UserLogin` = '$username'";
    $update_activity = "UPDATE `users` SET `UserActive` = '1' WHERE `UserLogin` = '$username'";
    $update_activity_none = "UPDATE `users` SET `UserActive` = '0' WHERE `UserLogin` = '$username'";


    switch ($type) {
        case "login":
            $querry_finale = $update_last_login_correct;
            break;

        case "fail":
            $querry_finale = $update_last_login_fail;
            break;

        case "logout":
            $querry_finale = $update_last_login_activity;
            break;

        case "active";
            $querry_finale = $update_activity;
            break;

        case "active_none";
            $querry_finale = $update_activity_none;
            break;
    }
    mysqli_query(CONN, $querry_finale);
}

function UpdateUserData($data, $value)
{
    $id = $_SESSION['ID'];
    $querry = "UPDATE `users` SET `$data` = $value WHERE `UserID` = $id ";
    mysqli_query(CONN, $querry);
}

function UpdateDeviceData($PhoneID, $data, $value)
{
    $querry = "UPDATE `devices` SET `$data` = $value WHERE `DeviceID` = $PhoneID ";
    mysqli_query(CONN, $querry);
}

function GetList($what_pre)
{
    if ($what_pre != '') {
        $what = str_replace("_","",$what_pre);
        $what_name = $what."Name";
        $what_ID = $what."ID";
        $querry = "SELECT $what_name , $what_ID FROM `$what_pre`";
        $result = mysqli_query(CONN, $querry);
        printf(mysqli_num_rows($result));
    }
}
