<?php
    include '../locations.php';
    include DBH;
    include_once SESSION;
    

    if( isset($_GET['s'])){
        $search = $_GET['s'];
        $limit = 6;

        $short = " `AccessoriesFullName` LIKE '%$search%'";
        $count = "SELECT `AccessoriesID` FROM `accessories` WHERE ";
        $limit = " LIMIT $limit";
        $get_id = 'SELECT `AccessoriesID` FROM `accessories` WHERE '.$short.' LIMIT '.$limit;
        $query = 'SELECT * FROM `accessories` WHERE ';

        if (str_ends_with($search," ") == false){

            $count .= $short;
            $short = $query.$short.$limit;;
            $query = mysqli_query(CONN,$short);
            $length = mysqli_num_rows(mysqli_query(CONN,$count));}

            if ( $length > 0 ){

                echo'<div class="replace">';

                $lp = 0 ;


                while ($row = mysqli_fetch_assoc($query)) {

                    ++$lp;

                    $AccessoriesName = $row['AccessoriesName'];
                    $AccessoriesFullName = $row['AccessoriesFullName'];
                    $AccessoriesDate = $row['AccessoriesDate'];
                    $AccessoriesAtributte = $row['AccessoriesAtributte'];
                    $AccessoriesID = $row['AccessoriesID'];
                    $CaseCHglass = $row['CaseCHglass'];
                    $Case3MKglass = $row['Case3MKglass'];
                    $CaseSPPglass = $row['CaseSPPglass'];
                    $AccessoriesExtraInfo = $row['AccessoriesExtraInfo'];
                    $UserID = $row['UserID'];
                    $AccessoriesSKU = $row['AccessoriesSKU'];
                    $AccessoriesType = $row['AccessoriesType'];
                    $AccessoriesOrginID = $row['AccessoriesOrginID'];



                    echo'
                    <div class="container px-1">
                        <div class="row text-primary search-container">
                            <div class="col-1 py-2">'.$lp.'</div>
                            <div class="col-8 py-2 search-res" onclick="showAccessories('.$AccessoriesID.')">'.$AccessoriesName.'</div>
                            <div class="col-2 py-2 search-res" onclick="showAccessories('.$AccessoriesID.')">'.$AccessoriesSKU.'-'.'</div>
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
                                
?>