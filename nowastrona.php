<?php
include_once './functions/sqlquerry.php';
?>
<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <meta charset="utf-8">
        <title>Smart Offers </title>
        <link rel="stylesheet" href="./css/style.css">
        <link rel="shortcut icon" href="./img/cube.svg">
    </head>
    <body>
        <header>
        </header>
        <section>
            <?php
            print_r(database_operations("select","users","*",NULL,NULL,NULL));
            ?>
        </section>

<footer>
        <p>© 2021 Made by Borys Kaleta. All rights reserved.</p>
</footer>
</body>
</html>    