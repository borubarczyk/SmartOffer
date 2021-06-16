<?php
    include_once './header.php';
?>

        <div class="search">
                <form action="search_case.php" method="GET">
                    <input class="search-box"type="text" placeholder="Nazwa etui..." name="s" autocomplete="off" autofocus required>
                    <button title="submit" type="submit" name="submit" valeu="search" style="display:none;"></button>
                    <a href="add_case_form.php" class="add-button">+</a>
                </form>   
        </div>
    </body>
</html>    