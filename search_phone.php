<?php
    include_once './header.php';
?>
    <selection>
            <div class="wrapper">
                <?php
                if(isset($_GET['s']) && $_GET['s'] != ''){
                    $s = trim($_GET['s'],' ');
                        $limit = 10;
                        $query_string = ('SELECT TelefonID, NazwaProducenta, NazwaModelu ,InnaNazwa, Cale , GsmArenaUrl FROM modele JOIN producenci ON modele.ProducentID = producenci.ProducentID JOIN users ON modele.UserID = users.UserID WHERE ');
                        $query_string_super_short = $query_string.("NazwaModelu LIKE '%".$s."%' LIMIT ".$limit."" );
                        $query_string_short = $query_string.("MATCH (NazwaModelu,InnaNazwa) AGAINST ('%".$s."%' WITH QUERY EXPANSION) LIMIT ".$limit."");
                        $query_string .= "MATCH (NazwaModelu,InnaNazwa) AGAINST ('%".$s."%' IN BOOLEAN MODE) LIMIT ".$limit." ";
                        if($conn == false){
                            die("Baza danych niedostępna" .mysqli_connect_error());
                        }
                        else
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

                        if ($result_counter > 0){

                            echo '<div class="search_info"><p>Znaleziono: <b>'.$result_counter.'</b></p>';
                            echo '<p>Szukałeś: <b>'.$s.'</b></p></div><div class="result-wrapper">';
                            echo '<table class="table_results">
                            <tr>
                                <th>LP</th>
                                <th>Model</th>
                                <th>Cale</th>
                                <th></th>
                                <th></th>
                                <th></th>

                            </tr>';
                            $LP = 0;
                            while($row = mysqli_fetch_assoc($query)){
                                ++$LP;
                                $url = $row['GsmArenaUrl'];
                                $name = $row['NazwaModelu'];
                                if(empty($url))
                                {
                                    $url = "https://www.gsmarena.com/res.php3?sSearch=".$name;
                                }
                                echo
                                '<tr>
                                <td>'.$LP.'</td>
                                <td>'.$name.'</td>
                                <td>'.$row['Cale'].'"</td>
                                <td class="buton-search-result"><button class="search-actions-buttons" id="info-icon"><a href="'.$url.'" target="_blank"><img src="./img/basic-ui/svg/091-warning.svg" alt="info"></a></button></td>
                                <td class="buton-search-result"><button class="search-actions-buttons" id="edit-icon"><img src="./img/basic-ui/svg/062-pencil.svg" alt="edit"></button></td>
                                <td class="buton-search-result"><button class="search-actions-buttons" id="delete-icon"><img src="./img/basic-ui/svg/076-remove.svg" alt="delete"></button></td>
                                </tr>';
                            }

                            echo '</table>';
                        }
                        else{
                            echo '<div class="search_info"><p>Znaleziono: <b>'.$result_counter.'</b></p>';
                            echo '<p>Szukana fraza: <b>'.$s.'</b></p></div>';
                            echo '<div class="search_info"><p id="bad_info">Nic nie znalazłem ... :( </p></div>';
                        }
                    }
                    else
                        echo '';

                ?>
                </div>
                </div>
                </selection>
<?php
include_once './footer.php';
?>