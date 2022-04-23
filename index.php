<?php
include "header.php"
?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Pulpit</h1>
        <div class="row  mt-5">

            <div class="col-xl-3 col-md-6">
                <div class="card mb-4">
                    <div class="card-header text-secondary">Użytkowników:</div>
                    <div class="card-body">
                        <p class="text-center fs-1 text-primary"><i class="fa-solid fa-user me-4"></i><?php echo ($_SESSION['num_of_users']); ?></p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card mb-4">
                    <div class="card-header text-secondary">Modeli urządzeń:</div>
                    <div class="card-body">
                        <p class="text-center fs-1 text-primary"><i class="fa-solid fa-mobile-screen-button me-4"></i><?php echo ($_SESSION['num_of_devices']); ?></p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card mb-4">
                    <div class="card-header text-secondary">Serii produktowych:</div>
                    <div class="card-body">
                        <p class="text-center fs-1 text-primary"><i class="fa-solid fa-industry me-4"></i><?php echo ($_SESSION['num_of_series']); ?></p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card mb-4">
                    <div class="card-header text-secondary">Produktów:</div>
                    <div class="card-body">
                        <p class="text-center fs-1 text-primary"><i class="fa-solid fa-boxes-stacked me-4"></i><?php echo ($_SESSION['num_of_products']); ?></p>
                    </div>
                </div>
            </div>

        </div>
    </div>


</main>


<?php
include "footer.php"
?>