<?php
    include "header.php";    
?>

<main >
    <div class="container-fluid px-4">
        <h1 class="mt-4">Telefony, tablety oraz smartwatche</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="./index.php">Pulpit</a></li>
            <li class="breadcrumb-item">Telefony</li>
            <li class="breadcrumb-item active">Wyszukaj</li>
            <li class="breadcrumb-item"><a href="./add-device.php">Dodaj</a></li>
        </ol>


    <div class="row">

        <div class="col-xl-5">

            <div class="card mb-4">

                <div class="card-header"><i class="fa-solid fa-magnifying-glass me-3"></i>Wyszukaj model</div>
                <div class="card-body">
                    <div class="input-group">
                        <input type="search" id="text-search" class="form-control rounded" placeholder="Samsung Galaxy..." aria-label="Szukaj modelu" aria-describedby="search-addon" onkeyup="GetData('getPhoneList');" onkeydown="GetDataFromThis(this)" />
                        <button type="button" class="btn btn-outline-primary" onclick="GetData('getPhoneList')">Wyszukaj</button>
                    </div>
                    
                    <div class="container px-1 pt-1">
                        <div class="row py-2 text-balck text-nowrap">
                            <div class="col-1"><b>LP</b></div>
                            <div class="col-7"><b>Nazwa</b></div>
                            <div class="col-2 text-end"><b>Cale</b></div>
                            <div class="col-1 text-center"><i class="fa-solid fa-link"></i></div>
                            <div class="col-1 text-center"><i class="fa-solid fa-eye"></i></div>
                        </div>
                    </div>

                    <div class="replace">
                        <p class="m-auto fs-1 text-primary p-4 text-center">Bark danych :(</p>
                    </div>

                </div>
                <div class="card-footer text-end">Ostatnia aktualizacja: 19:30 21.01.2020</div>
            </div>

        </div>

        <div class="col-xl-7">

            <div class="card mb-4">
                <div class="card-header"><i class="fa-solid fa-database me-3"></i>Dane modelu</div>
                <div class="card-body">
                    <div class="replace-info">
                        <script>window.onload = showProduct('<?php echo($_SESSION['last_phone_search']);?>');</script>
                        <div class="loader"></div>
                    </div>
                </div>
                <div class="card-footer"><p></p></div>
            </div>

        </div>

    </div>


    </div>
</main>
<?php
    include "footer.php" 
?>