<?php
    $activePage = basename($_SERVER['PHP_SELF'], ".php");
?>

<!-- Spinner Start -->
<div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-0">
        <div class="row g-0 d-none d-lg-flex">
            <div class="col-lg-6 ps-5 text-start">
                <div class=" h-100 d-inline-flex align-items-center text-white">
                    <span>Suivez nous:</span>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-6 text-end">
                <div class="h-100 topbar-right d-inline-flex align-items-center text-white py-2 px-5">
                    <span class=" me-2"><i class="fa fa-phone-alt me-2"></i>Appelez nous:</span>
                    <span class="">+242 06 601 33 86 / 05 551 81 11</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-xl bg-white navbar-light sticky-top py-0 pe-5">
        <a href="../index.php" class="navbar-brand ps-5 me-0">
            <img src="assets/img/logo-creeds.png" alt="Bootstrap" width="120">
        </a>
        <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link <?= ($activePage == 'index') ? 'active':''; ?>">Accueil</a>
                <a href="about.php" class="nav-item nav-link <?= ($activePage == 'about') ? 'active':''; ?>">A propos</a>
                <a href="unite_production.php" class="nav-item nav-link <?= ($activePage == 'unite_production') ? 'active':''; ?>">Unité de production</a>
                <a href="engins_equip.php" class="nav-item nav-link <?= ($activePage == 'engins_equip') ? 'active':''; ?>">Engins et équipements</a>
                <a href="solaire.php" class="nav-item nav-link <?= ($activePage == 'solaire') ? 'active':''; ?>">Solaire</a>
                <a href="achat_app.php" class="nav-item nav-link <?= ($activePage == 'achat_app') ? 'active':''; ?>">Achat et approvisionnement</a>
                <a href="contact.php" class="nav-item nav-link <?= ($activePage == 'contact') ? 'active':''; ?>">Contact</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->