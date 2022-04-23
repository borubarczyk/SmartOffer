<?php
    define("db_server" , "localhost");
    define("db_username" , "smartoffer_main");
    define("db_password" , "admin");
    define("db_name" , "smartoffer");
    
    define("CONN" , mysqli_connect(db_server , db_username, db_password, db_name,3306));
    
    if(CONN == false){
        header("Location:" , ERROR."SEND CODE DATA TO GENERATE THHE PAGE");
        // NEED A PAGE TO READ ERRORS CODES AND REACT TO IT
    }   
?>