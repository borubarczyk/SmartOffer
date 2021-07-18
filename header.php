<?php
    session_start();
    include './functions/dbh.php';
    include './functions/functions.php';
    include './functions/session.php';

?>
<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
        <script src="./scripts/script.js"></script>
        <meta charset="utf-8">
        <title>Smart Offers </title>
        <link rel="stylesheet" href="./css/style.css">
        <link rel="shortcut icon" href="./img/cube.svg">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    </head>

    <body>
        <div class="se-pre-con"></div>
        <header>
            <nav >
                <img src="./img/cube.svg">
                <a title="Strona Główna" href="index.php" >SmartOffer</a>
                <a title="Dodaj model" href="phones.php">Telefony</a>
                <a title="Dodaj etui" href="case.php">Etui</a>
                <a title="Generator plików .csv i .tsv" href="offers.php">Generatory</a>
                <a title="Zobacz ostatnie zmiany" href="logs.php">Logi</a>
                <a href="settings.php" id="name"><?php echo($name)?></a>
                <a title="Wyloguj ->" href="./functions/logout.php">Wyloguj -></a>
            </nav>
        </header>
