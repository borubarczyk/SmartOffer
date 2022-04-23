<?php
include 'header.php';
include 'php/function.php';
update_user_data();
?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Użytkownik</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="./user-activity.php">Aktywność</a></li>
            <li class="breadcrumb-item active">Ustawienia</li>
        </ol>

        <div class="row">
            <div class="col-xl-7">
                <div class="card mb-4">
                    <div class="card-header"><i class="fa-solid fa-user me-2"></i>Dane użytkownika:</div>
                    <div class="card-body py-4 px-2">
                        <div class="row d-flex align-items-center text-center justify-content-center">

                            <div class="col-md-6">
                                <img class="img-fluid" style="max-height: 300px;" src="./assets/img/faces-ui/<?php echo $_SESSION['img'] ?>">
                            </div>
                            
                            <div class="col-md-6">
                                <p class="fw-bolder mt-1 fs-1 text-primary"><?php echo $_SESSION['name'] ?></p>
                                <p class="fw-bolder">Ostatnia próba logowania</p>
                                <p class="text-primary fs-5"><?php echo $_SESSION['date'] ?></p>
                                <p class="text-primary fs-5"><?php echo $_SESSION['ip'] ?></p>
                                <p class="fw-bolder">Ostatnia udane logowanie</p>
                                <p class="text-primary fs-5"><?php echo $_SESSION['date_correct'] ?></p>
                                <p class="fw-bolder">Adres IP</p>
                                <p class="text-primary fs-5"><?php echo ($_SERVER['REMOTE_ADDR']) ?></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-5">
                <div class="card mb-4">
                    <div class="card-header"><i class="fa-solid fa-key me-2 "></i>Dane logowania:</div>
                    <div class="card-body mx-5 mb-5 mt-2">
                    <form onsubmit="return validate();" action="./php/change_pass.php" method="POST">
                        <div class="row">
                            <lablel class="form-text">E-mail</lablel>
                            <input class="form-control fs-5" disabled readonly name="mail" value="<?php echo $_SESSION['mail'] ?>" type="mail">
                            <lablel class="form-text">Login</lablel>
                            <input class="form-control fs-5" disabled readonly name="username" id="username" value="<?php echo $_SESSION['login'] ?>" type="text" >
                            <label class="form-text">Zmień hasło</label>
                            <input class="form-control fs-5" minlength="8" name="password_f" id="password_f" maxlength="64" autocomplete="new-password" type="password" tabindex="1" require>
                            <label class="form-text">Powtórz hasło</label>
                            <input class="form-control fs-5" minlength="8" name="password_s" id="password_s" maxlength="64" autocomplete="new-password" type="password" tabindex="2" require>
                            <button class="btn bg-primary mt-4 fw-bold fs-5" type="submit" tabindex="3">Zapisz zmiany</button>
                        </div>
                    </form>
                    </div>

                </div>
</main>

<?php
include 'footer.php';
?>