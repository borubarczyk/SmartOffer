<?php
    include '../locations.php';
    include DBH;
    

    if( isset($_GET['s']) && $_GET['s'] != ''){
        $search = $_GET['s'];

        $limit = 6;
        $short = " DeviceModelName LIKE";
        $connector = "AND";
        $count = "SELECT `DeviceID` FROM devices WHERE ";
        $limit = " ORDER BY `DevicePopularity` DESC LIMIT $limit";
        $query = 'SELECT * FROM devices JOIN devices_manufactures ON devices.ManufactureID  = devices_manufactures.ManufactureID WHERE ';

        $array = explode(' ',$search);
        $array_size = count($array);
        $querry_sel = "";

        for ( $i = 0 ; $i < $array_size ; $i++){
            $value = $array[$i];
            if( $i > 0 & $i < $array_size){
                $querry_sel.=$connector;
            }
            $querry_sel.=$short." '%".$value."%' ";
            if($value = ''){
                continue;
            }
            
        }


        if (str_ends_with($search," ") == false){

                $count .= $querry_sel;
                $normal = $query.$querry_sel.$limit;
                $query = mysqli_query(CONN, $normal);
                $length = mysqli_num_rows(mysqli_query(CONN,$count));
    
    
                if ( $length > 0 ){

                echo'<div class="replace">';

                $lp = 0 ;


                while ($row = mysqli_fetch_assoc($query)) {

                    ++$lp;


                    $url = $row['DeviceGSMLink'];
                    $name = $row['DeviceModelName'];
                    $size = $row['DeviceScreenSize'].'"';
                    $id = $row['DeviceID'];

                    echo'
                    <div class="container px-1">
                        <div class="row text-primary search-container">
                            <div class="col-1 py-2">'.$lp.'</div>
                            <div class="col-7 py-2 search-res" onclick="showProduct('.$id.')">'.$name.'</div>
                            <div class="col-2 py-2 text-end">'.$size.'</div>
                            <div class="col-1 py-2 text-center"><a href="'.$url.'" target="_balnk"><i class="fa-solid fa-link"></i></a></div>
                            <div class="col-1 py-2 text-center"><a href="#" ><i class="fa-solid fa-eye"></i></a></div>
                        </div>
                    </div>
                    ';

                    
                    if ( $lp == $limit ){
                        break;}
                
                }

                echo'
                    <div class="d-flex px-1 pt-1 align-items-center justify-content-between">
                        <p class="m-0"></p>
                        <p class="m-0">Znaleziono: <b>'.$length.'</b></p>
                    </div>
                </div>
                ';

            } else{
                echo'
                <div class="replace">
                <p class="m-auto fs-1 text-primary p-4 text-center">Bark danych :(</p>
                    <div class="d-flex px-1 pt-1 align-items-center justify-content-between">
                        <p class="m-0"></p>
                        <p class="m-0">Znaleziono: <b>'.$length.'</b></p>
                    </div>
                </div>
                ';

            }  
        }  
    }
?>