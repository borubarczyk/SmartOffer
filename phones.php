<?php
    include_once './header.php';
?>

    <section>
        <div class="search">
                <form action="search_phone.php" method="GET">
                    <input class="search-box"type="text" placeholder="Nazwa modelu..." name="s" autocomplete="off" spellcheck="false" autofocus required>
                    <a href="add_phone_form.php" class="add-button">+</a>
                </form>   
        </div>
        </section>

<?php
include_once './footer.php';
?>
