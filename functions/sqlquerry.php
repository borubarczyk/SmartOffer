<?php
function database_operations($operation_type,$table_name,$data_name,$data_value,$condition,$limit){

    $conn = mysqli_connect("localhost","root",NULL,"smartoffer");
    if($conn == false){
        header("Location: error.html");
    }

    switch ($operation_type){
        case "select":
            $sql_request ="SELECT $data_name FROM $table_name";
        break;
            
        case "update":
            $sql_request ="UPDATE $table_name SET $data_name";
        break;

        case "insert":
            $sql_request ="INSERT INTO $table_name ($data_name) VALUES ($data_value)";
        break;

        case "just_querry":
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
    
    $result = mysqli_fetch_assoc(mysqli_query($conn,$sql_request));


    if($result){
        return $result;
        /*header("Location: sucess.php");*/
    } 
    else{
        echo("Bad info :( didnt work");
        /*header("Location: fail.php");*/
    }
}
?>