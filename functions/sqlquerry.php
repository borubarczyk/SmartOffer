<?php

function database_operations($sql_operation_type,$table_name,$data_name,$data_value,$sql_condition,$limit){

    $conn = mysqli_connect("localhost","root",NULL,"smartoffer");
    if($conn == false){
        header("Location: error.html");
    }

    switch ($sql_operation_type){
        case "select":
            $sql_request ="SELECT $data_name FROM $table_name";
        break;
            
        case "update":
            $sql_request ="UPDATE $table_name SET $data_name";
        break;

        case "insert":
            $sql_request ="INSERT INTO $table_name ($data_name) VALUES ($data_value)";
        break;

        case "query":
            $sql_request = $data_name;
        break;
    }

    if(isset($sql_condition)){
        $sql_condition = " WHERE ".$sql_condition;
        $sql_request = $sql_request . $sql_condition;
    }
    if(isset($limit)){
        $sql_request = $sql_request ." LIMIT ". $limit;
    }
    $result = mysqli_query($conn,$sql_request);
    return $result;
}

function display($data){
    while($row = mysqli_fetch_assoc($data)){
        print_r($row);
        echo("</br>");
    }
}
?>