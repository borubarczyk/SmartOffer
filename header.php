<?php
    session_start();
    include './dbh.php';
    include './functions.php';
 
    $user_data = verify_login($conn);
    $_SESSION;
?>
<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
        <script src="./script.js"></script>
        <meta charset="utf-8">
        <title>Smart Offers </title>
        <link rel="stylesheet" href="./style.css">
        <link rel="shortcut icon" href="img/icon.ico" />
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    </head>

    <body>
        <div class="se-pre-con"></div>

        <header>
            <nav >
                <img src="img/logo7.png">
                <a title="Strona Główna" href="index.php" >SmartOffer</a>
                <a title="Dodaj model" href="phones.php">Telefony</a>
                <a title="Dodaj etui" href="case.php">Etui</a>
                <a title="Generator plików .csv i .tsv" href="offers.php">Generatory</a>
                <a title="Zobacz ostatnie zmiany" href="logs.php">Logi</a>
                <a title="Wyloguj ->"href="logout.php">Wyloguj -></a>
            </nav>
        </header>