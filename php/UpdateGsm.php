<?php

    include "../locations.php";
    include DBH;
    include SESSION;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $PhoneID = $_POST['DeviceID'];
        $model_name = $_POST['nazwa_modelu'];
        $screen_size = $_POST['cale'];
        $manufacture = $_POST['producent'];
        $extra_info = $_POST['uwagi'];
        $gsm_url = $_POST['gsm_link'];
        $photo_link = $_POST['link_zdjecie'];
        $sku = $_POST['sku'];
        $price = $_POST['cena'];
        $year = $_POST['rok'];
        $type = $_POST['typ'];

        if($year && $price == ''){
            $year & $price = 'NULL';
        }

        if(isset($PhoneID,$model_name,$screen_size,$manufacture,$sku,$type)){
            $querry = "UPDATE devices SET `DeviceModelName` = '$model_name' , `DeviceScreenSize` = '$screen_size' , `DeviceGSMLink` = '$gsm_url' , `DevicePhotoLink` = '$photo_link' , `DeviceReleaseDate` = '$year' , `DeviceExtraInfo` = '$extra_info' , `DeviceSKU` = '$sku' , `DevicePrice` = '$price' WHERE `DeviceID` = '$PhoneID'";
            mysqli_query(CONN,$querry);
            header("Location: ../devices.php");
        }

    }

    ?>