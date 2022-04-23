<?php
include 'header.php';
?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Użytkownik</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">Aktywność</li>
            <li class="breadcrumb-item active"><a href="./user-settings.php">Ustawienia</a></li>
        </ol>


<div class="col">
    <div class="card mb-4">
        <div class="card-header"><i class="fa-solid fa-timeline me-2"></i>Logi</div>
        <div class="card-body text-center fw-bold fs-7 p-5 m-auto">
            <div class="replace">
                Ładuję
            </div>
        </div>
        <div class="card-footer">
            Strona 1
        </div>
    </div>
</div>




    </div>
</main>
<script>window.onload = GetData('getLogsList')</script>
<?php

include 'footer.php';
?>