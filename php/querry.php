<?php
include "dbh.php";

const AccManAll = "SELECT * FROM `accessories_manufacture`";
const AccManList = "SELECT AccessoriesManufactureName , AccessoriesManufactureID FROM `accessories_manufacture`";
const DevManList = "SELECT ManufactureName , ManufactureID  FROM `devices_manufactures`";
const DevTypesList = "SELECT TypeName , TypeID   FROM `types`";
const AccTypesList = "SELECT AccessoriesTypesName , AccessoriesTypesID FROM `accessories_type`";
const SelectTableLike = "SELECT * FROM {TABLENAME} WHERE {COLUMNNAME} LIKE '%{SEARCHVALUE}%'";
const SelectTableLikeOr = "OR '%{SECONDVALUE}%'";


if (isset($_GET['f']) && isset($_GET['d'])) {
    $function = $_GET['f'];
    $data = $_GET['d'];

    if ($function == "rq") {
        $Array_data = DecodeFunctionData($data);
        if (sizeof($Array_data) == 1 && defined($Array_data[0]) != false) {
            $Array_data[1] = "false";
            $Array_data[2] = "false";
            RunQuerry(constant($Array_data[0]), $Array_data[1], $Array_data[2]);
        }
    }else{

    }
}


function DecodeFunctionData($data)
{
    return explode("@", $data);
}

function DecodeQuerry($array,$querry)
{
    
}

function RunQuerry($querry, $json, $print)
{
    $result = mysqli_query(CONN, $querry);
    if ($json == true) {
        header('Content-type: application/json');
        $result = ConvertDataToJSON($result, $print);
    }
    return $result;
}

function ConvertDataToJSON($result, $print)
{
    $rows = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    if ($print == true) {
        print json_encode($rows);
        return;
    }
    return json_encode($rows);
}

function DisplayData($data)
{
    var_dump($data);
}

function DisplayMessage($data)
{
    echo ($data);
}
