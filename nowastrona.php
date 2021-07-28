<?php
    include './header.php';
    include './functions/sqlquerry.php';
?>
        <section>
            <?php
            $data = database_operations("select","users","*",NULL,NULL,NULL);
            display($data);
            $data2 = database_operations("select","producenci","NazwaProducenta",NULL,NULL,5);
            display($data2);
            ?>
        </section>

<footer>
        <p>© 2021 Made by Borys Kaleta. All rights reserved.</p>
</footer>
</body>
</html>    