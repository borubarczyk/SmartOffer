<?php
include '../locations.php';
include SESSION;
include DBH;
include FUNCTIONS;

if (isset($_GET['id_1']) && $_GET['id_1'] != '') {

    $id = trim($_GET['id_1']);

    $_SESSION['last_phone_search'] = $id;


    $querry = "SELECT devices.* , users.UserName , devices_manufactures.ManufactureName , devices_manufactures.ManufactureSKU , types.TypeName FROM devices JOIN users on devices.UserID = users.UserID JOIN devices_manufactures on devices.ManufactureID = devices_manufactures.ManufactureID JOIN types on devices.TypeID = types.TypeID WHERE DeviceID = '$id' LIMIT 1; ";
    $result = mysqli_fetch_assoc(mysqli_query(CONN, $querry));
    $model_name = $result['DeviceModelName'];
    $screen_size = $result['DeviceScreenSize'];
    $user = $result['UserName'];
    $uwagi = $result['DeviceExtraInfo'];
    $link = $result['DeviceGSMLink'];
    $data = $result['DeviceDate'];
    $sku = $result['DeviceSKU'];
    $data_premiery = $result['DeviceReleaseDate'];
    $cena = $result['DevicePrice'];
    $producent = $result['ManufactureName'];
    $typ = $result['TypeName'];
    $popularnosc = $result['DevicePopularity'];
    $photo_link = $result['DevicePhotoLink'];
    $manufacture_sku = $result['ManufactureSKU'];
    $google_link = 'https://www.google.com/search?q='.$model_name;
    $css_id = 'id-' . $id;

    UpdateDeviceData($id,'DevicePopularity',$popularnosc+1);

}
?>

<div class="replace-info" id="<?php echo ($css_id) ?>">
    <form method="post" action="php/UpdateGsm.php">
        <div class="row m-0">
            <div class="col-lg-12">

                <div class="row">
                    <div class="col-2">
                        <label for="IDModelu" class="form-text">ID</label>
                        <input type="text" name="DeviceID" id="IDModelu" class="form-control" readonly value="<?php echo ($id) ?>">
                    </div>

                    <div class="col-8">
                        <label for="NazwaModelu" class="form-text">Nazwa modelu</label>
                        <div class="input-group">
                            <input type="text" name="nazwa_modelu"  required minlength="6" class="form-control" value="<?php echo ($model_name) ?>" id="NazwaModelu">
                            <span role="button" class="input-group-text bg-primary"><a href="<?php echo ($google_link) ?>" target="tab" rel="noopener noreferrer"><i class="fa-solid fa-magnifying-glass text-white"></i></a></span>
                        </div>
                        
                    </div>
                    <div class="col-2">
                        <label for="WielkoscEkranu" class="form-text">Cale</label>
                        <input type="number" required id="WielkoscEkranu" name="cale" min="0" step=0.01 class="form-control" max="20" value="<?php echo ($screen_size) ?>" aria-label="Cale">
                    </div>
                </div>

                <div class="row">
                    
                    <div class="col-3">
                            <label for="Uwagi" class="form-text">Producent:</label>
                            <input type="text" name="producent"id="Uwagi" class="form-control" value="<?php echo ($producent) ?>">
                    </div>
                    <div class="col-9">
                        <label for="Uwagi" class="form-text">Uwagi:</label>
                        <input type="text" name="uwagi" id="Uwagi" class="form-control" value="<?php echo ($uwagi) ?>">
                    </div>

                </div>

                <div class="row">
                    <div class="col-12">
                        <label for="GSMLink" class="form-text">GSM Link:</label>
                        <div class="input-group mb-3">
                            <input id="GSMLink" type="link" name="gsm_link" class="form-control" value="<?php echo ($link) ?>">
                            <button class="btn btn-outline-primary" disabled>Załaduj<i class="fa-solid fa-download px-1"></i></button>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <label for="PhotoLink" class="form-text">Link do zdjęcia:</label>
                        <input id="PhotoLink" name="link_zdjecie" type="link" class="form-control" value="<?php echo ($photo_link) ?>">
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <label for="sku" class="form-text">SKU</label>
                            <div class="input-group">
                            <input type="text" id="sku_input" name="sku" class="form-control" value="<?php echo ($sku) ?>">
                            <span role="button" class="input-group-text bg-primary" onclick="CreateSKU('<?php echo($manufacture_sku.'%'.$model_name.'%'.$producent)?>');"><i class="fa-solid fa-code text-white"></i></span>
                        </div>
                    </div>

                    <div class="col-3">
                        <label for="" class="form-text">Cena</label>
                        <input type="number" name="cena" class="form-control" min="100" value="<?php echo ($cena) ?>">
                    </div>
                    <div class="col-3">
                        <label for="" class="form-text">Rok premiery</label>
                        <input type="number" name="rok" class="form-control" min="2000" max="2050" value="<?php echo ($data_premiery) ?>">
                    </div>
                </div>

                <div class="row">
                    <div class="col-3">
                        <label for="" class="form-text">Typ:</label>
                        <input type="text" name="typ" class="form-control " value="<?php echo ($typ) ?>">
                    </div>
                    <div class="col-3">
                        <label for="" class="form-text">Dodany Przez:</label>
                        <input type="text" disabled class="form-control text-center" value="<?php echo ($user) ?>">
                    </div>
                    <div class="col-4">
                        <label for="" class="form-text">Data:</label>
                        <input type="text" disabled class="form-control  text-center" value="<?php echo ($data) ?>">
                    </div>
                    <div class="col-2">
                        <label for="" class="form-text">Popularność:</label>
                        <input type="text" disabled class="form-control  text-center" value="<?php echo ($popularnosc) ?>">
                    </div>
                </div>

                <div class="row justify-content-start mt-4">
                    <div class="col-auto">
                        <button type="submit" class="btn cus-btn-green px-3"><i class="fa-solid fa-floppy-disk me-2"></i>Zapisz</button>
                    </div>
                    <div class="col-auto">
                       <button class="btn cus-btn-red px-3" onclick="showProduct(<?php echo($id)?>)"><i class="fa-solid fa-xmark me-2"></i>Odrzuć</button>
                    </div>
                </div>
            </div>


        </div>

        <div class="col-lg text-center align-self-center visually-hidden">
                <img src="<?php echo ($photo_link) ?>" alt="Zdjęcie telefonu" calss="img-fluid">
            </div>

    </form>
</div>