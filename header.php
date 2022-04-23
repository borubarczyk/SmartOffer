<?php
include "./locations.php";
include SESSION;
?>

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="refresh" content="9000;url=./php/logout.php" />
    <meta name="description" content="" />
    <meta name="author" content="Borys Kaleta" />
    <title>SmartOffer</title>
    <link rel="shortcut icon" href="./assets/img/cube.svg">
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/loader.css" rel="stylesheet" />
    <link href="css/custom.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="js/getdata.js"></script>
</head>

<body class="sb-nav-fixed">

    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.php">
            <img src="./assets/img/cube.svg" height="30px">
            SmartOffer</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Wyszukaj..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="user-settings.php">Ustawienia</a></li>
                    <li><a class="dropdown-item" href="user-activity.php">Aktywność</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="./php/logout.php">Wyloguj</a></li>
                </ul>
            </li>
        </ul>
    </nav>

    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">

                        <div class="sb-sidenav-menu-heading">Główne</div>

                        <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-house text-primary"></i></div>Pulpit
                        </a>

                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseZadania" aria-expanded="false" aria-controls="collapseZadania">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-list-check text-primary"></i></div>Zadania<div class="sb-sidenav-collapse-arrow"><i class="fa-solid fa-angle-down"></i></div>
                        </a>

                        <div class="collapse" id="collapseZadania" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="task.php">
                                    <div class="sb-nav-link-icon"><i class="fa-solid fa-bolt text-warning"></i></div>Aktualne
                                </a>
                                <a class="nav-link" href="history.php">
                                    <div class="sb-nav-link-icon"><i class="fa-solid fa-clock-rotate-left text-blue"></i></div>Historia
                                </a>
                            </nav>
                        </div>

                        <div class="sb-sidenav-menu-heading">Modele i Etui</div>

                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#CollapseTelefony" aria-expanded="false" aria-controls="CollapseTelefony">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-mobile text-primary"></i></div>Telefony<div class="sb-sidenav-collapse-arrow"><i class="fa-solid fa-angle-down"></i></div>
                        </a>

                        <div class="collapse" id="CollapseTelefony" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="devices.php">
                                    <div class="sb-nav-link-icon"><i class="fa-solid fa-magnifying-glass text-gray"></i></div>Wyszukaj
                                </a>
                                <a class="nav-link" href="add-device.php">
                                    <div class="sb-nav-link-icon"><i class="fa-solid fa-plus text-success"></i></div>Dodaj
                                </a>
                            </nav>
                        </div>

                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#CollapseEtui" aria-expanded="false" aria-controls="CollapseEtui">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-shield-blank text-primary"></i></div>Akcesoria<div class="sb-sidenav-collapse-arrow"><i class="fa-solid fa-angle-down"></i></div>
                        </a>

                        <div class="collapse" id="CollapseEtui" aria-labelledby="headingThere" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="accessories.php">
                                    <div class="sb-nav-link-icon"><i class="fa-solid fa-magnifying-glass text-gray"></i></div>Wyszukaj
                                </a>
                                <a class="nav-link" href="add-accessories.php">
                                    <div class="sb-nav-link-icon"><i class="fa-solid fa-plus text-success"></i></div>Dodaj
                                </a>
                            </nav>
                        </div>

                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#CollapsePages" aria-expanded="false" aria-controls="CollapsePages">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-bullseye text-primary"></i></div>MarketPlace<div class="sb-sidenav-collapse-arrow"><i class="fa-solid fa-angle-down"></i></div>
                        </a>

                        <div class="collapse" id="CollapsePages" aria-labelledby="headingFour" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="allegro.php">
                                    <div class="sb-nav-link-icon"><i class="fa-solid fa-shop text-secondary"></i></div>Allegro
                                </a>
                                <a class="nav-link" href="youtube.php">
                                    <div class="sb-nav-link-icon"><i class="fa-solid fa-store text-secondary"></i></div>YouTube
                                </a>
                            </nav>
                        </div>

                        <div class="sb-sidenav-menu-heading">Generatory i Konfiguracje</div>

                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#CollapseGenerators" aria-expanded="false" aria-controls="CollapseGenerators">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-wand-magic text-primary"></i></div>Generatory<div class="sb-sidenav-collapse-arrow"><i class="fa-solid fa-angle-down"></i></div>
                        </a>

                        <div class="collapse" id="CollapseGenerators" aria-labelledby="headingFour" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="baselinker.php">
                                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area text-primary"></i></div>BaseLinker
                                </a>
                                <a class="nav-link" href="enova.php">
                                    <div class="sb-nav-link-icon"><i class="fas fa-play text-primary"></i></div>Enova
                                </a>
                            </nav>
                        </div>

                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#CollapseConfiguration" aria-expanded="false" aria-controls="CollapseConfiguration">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-wrench text-primary"></i></div>Konfiguracje<div class="sb-sidenav-collapse-arrow"><i class="fa-solid fa-angle-down"></i></div>
                        </a>

                        <div class="collapse" id="CollapseConfiguration" aria-labelledby="headingFour" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="desc.php">
                                    <div class="sb-nav-link-icon"><i class="fa-solid fa-font text-primary"></i></div>Opisy
                                </a>
                                <a class="nav-link" href="templates.php">
                                    <div class="sb-nav-link-icon"><i class="fa-solid fa-file-lines text-primary"></i></div>Szablony
                                </a>
                                <a class="nav-link" href="settings.php">
                                    <div class="sb-nav-link-icon"><i class="fa-solid fa-file-lines text-primary"></i></div>Logi
                                </a>

                            </nav>
                        </div>
                        <a class="nav-link" href="settings.php">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-gear text-primary"></i></div>Ustawienia
                        </a>
                        <a class="nav-link" href="testing.php">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-gear text-primary"></i></div>Test
                        </a>


                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Zalogowany jako:</div>
                    <span class="text-primary pb-0"><?php echo ($_SESSION['name']) ?></span>
                </div>
            </nav>
        </div>

        <div id="layoutSidenav_content">