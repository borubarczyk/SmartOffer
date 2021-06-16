<?php
    include './dbh.php';
?>
<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <meta charset="utf-8">
        <title>Smart Offers</title>
        <link rel="stylesheet" href="style.css">
        <link rel="shortcut icon" href="img/icon.ico" />
        <script src="script.js"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>
            <div id="logo-wrap">
                <a href="index.html">
                    <img src="img/logo7.png">
                </a>
            </div>
            <nav >
                <a href="index.html" title="Strona Główna">SmartOffer</a>
                <a id="current-page" title="Dodaj model" href="phones.html">Telefony</a>
                <a title="Dodaj etui"href="case.html">Etui</a>
                <a title="Generator plików .csv i .tsv" href="offers.html">Generatory</a>
                <a title="Zobacz ostatnie zmiany" href="logs.html">Logi</a>
            </nav>
            <div id="logout-wrapper">
                <a href="index.html">Wyloguj -></a>
            </div>
        </header>
            <div class="wrapper">
                <?php

                if(isset($_GET['s']) && $_GET['s'] != ''){
                    $s = trim($_GET['s'],' ');
                        $limit = 10;
                        $query_string = ('SELECT TelefonID, NazwaProducenta, NazwaModelu, Cale, UserName, KiedyDodany, Szklo_CH, Szklo_3MK, Szklo_SPP FROM modele JOIN producenci ON modele.ProducentID = producenci.ProducentID JOIN users ON modele.UserID = users.UserID WHERE ');
                        $query_string_super_short = $query_string.("NazwaModelu LIKE '%".$s."%' LIMIT ".$limit."" );
                        $query_string_short = $query_string.("MATCH (NazwaModelu,InnaNazwa) AGAINST ('%".$s."%' WITH QUERY EXPANSION) LIMIT ".$limit."");
                        $query_string .= "MATCH (NazwaModelu,InnaNazwa) AGAINST ('%".$s."%' IN BOOLEAN MODE) LIMIT ".$limit." ";

                        $conn = mysqli_connect(db_server , db_username, db_password, db_name);
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
                                <th>ID</th>
                                <th>Model</th>
                                <th></th></th>
                                <th></th>
                                <th></th>

                            </tr>';

                            while($row = mysqli_fetch_assoc($query)){

                                echo
                                '<tr>
                                <td>'.$row['TelefonID'].'</td>
                                <td>'.$row['NazwaModelu'].'</td>
                                <td class="buton-search-result"><button class="search-actions-buttons" id="info-icon"><img src="./img/basic-ui/svg/091-warning.svg" alt="info"></button></td>
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
        </body>
</html>
