<?php
    include_once './header.php';
?>
    <section>
        <div class="search">
                <form action="search_case.php" method="GET">
                    <input class="search-box"type="text" placeholder="Nazwa etui..." name="s" autocomplete="off" autofocus required>
                    <a href="add_case_form.php" class="add-button">+</a>
                </form>   
        </div>
        </section>
    </body>

<?php
include_once './footer.php';
?>
  