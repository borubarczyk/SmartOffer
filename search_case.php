<?php
    include_once './header.php';
?>
        <section>
            <div class="wrapper">
                <?php
                if(isset($_GET['s']) && $_GET['s'] != ''){
                    $s = trim($_GET['s'],' ');
                        $limit = 10;
                        $query_string = ('SELECT EtuiID, EtuiProducent, EtuiNazwa, EtuiSzklo_CH, EtuiSzklo_3MK, EtuiSzklo_SPP FROM etui WHERE ');
                        $query_string_super_short = $query_string.("EtuiProducent OR EtuiNazwa LIKE '%".$s."%' LIMIT ".$limit."" );
                        $query_string_short = $query_string.("MATCH (EtuiProducent,EtuiNazwa) AGAINST ('%".$s."%' WITH QUERY EXPANSION) LIMIT ".$limit."");
                        $query_string .= "MATCH (EtuiProducent,EtuiNazwa) AGAINST ('%".$s."%' IN BOOLEAN MODE) LIMIT ".$limit." ";
                        if (strlen($s) < 3){
                            $query = mysqli_query($conn,$query_string_super_short);
                        }
                        else if(strlen($s) < 10){
                            $query = mysqli_query($conn, $query_string_short);
                        }
                        else{
                            $query = mysqli_query($conn, $query_string);
                        }
                        $result_counter = mysqli_num_rows($query);

                        if ($result_counter > 0)
                        {

                            echo '<div class="search_info"><p>Znaleziono: <b>'.$result_counter.'</b></p>';
                            echo '<p>Szukałeś: <b>'.$s.'</b></p></div><div class="result-wrapper">';
                            echo '<table class="table_results">
                            <tr>
                                <th>ID</th>
                                <th>Producent</th>
                                <th>Model</th>
                                <th>Chiny</th>
                                <th>3MK</th>
                                <th>S.Pro+</th>

                            </tr>';

                            while($row = mysqli_fetch_assoc($query)){

                                echo
                                '<tr>
                                <td>'.$row['EtuiID'].'</td>
                                <td>'.$row['EtuiProducent'].'</td>
                                <td>'.$row['EtuiNazwa'].'</td>
                                <td>'.$row['EtuiSzklo_CH'].'</td>
                                <td>'.$row['EtuiSzklo_3MK'].'</td>
                                <td>'.$row['EtuiSzklo_SPP'].'</td>
                                <td class="buton-search-result"><button class="search-actions-buttons" id="info-icon"><img src="./img/basic-ui/svg/091-warning.svg" alt="info"></button></td>
                                <td class="buton-search-result"><button class="search-actions-buttons" id="edit-icon"><img src="./img/basic-ui/svg/062-pencil.svg" alt="edit"></button></td>
                                <td class="buton-search-result"><button class="search-actions-buttons" id="delete-icon"><img src="./img/basic-ui/svg/076-remove.svg" alt="delete"></button></td>
                                </tr>';
                            }

                            echo '</table></div>';
                        }
                        else{
                            echo '<div class="search_info"><p>Znaleziono: <b>'.$result_counter.'</b> </p>';
                            echo '<p>Szukana fraza: <b>'.$s.'</b></p></div>';
                            echo '<div class="search_info"><p id="bad_info">Nic nie znalazłem ... :( </p></div>';
                        }
                    }
                    else
                        echo '';

                ?>
                </div>
                </section>
<?php
include_once './footer.php';
?>
