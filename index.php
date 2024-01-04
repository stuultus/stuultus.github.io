<!DOCTYPE html>
<html lang="en">

<?php include 'header\header.php'; ?>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <i class="bi bi-list toggle-sidebar-btn" style="padding-left: 20px;"></i>
        <div class="d-flex align-items-center justify-content-between">
            <a href="index.php" class="logo d-flex p-4 align-items-center">
                <img src="assets/img/logoKeamanan.png" alt="">
                <span class="d-none d-lg-block">KeamananData</span>
            </a>

        </div><!-- End Logo -->


        </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link " href="index.php">
                    <i class="bi bi-grid"></i>
                    <span>Beranda</span>
                </a>

            <li class="nav-heading">Algoritma</li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="Algoritma1.php">
                    <i class="bi bi-diagram-2"></i>
                    <span>Algoritma Serpent</span>
                </a>
            </li><!-- End Profile Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="Algoritma2.php">
                    <i class="bi bi-diagram-3"></i>
                    <span>Algoritma ECC</span>
                </a>
            </li><!-- End F.A.Q Page Nav -->

        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Beranda</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">Beranda</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->


        <!-- Section -->
        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Welcome</h5>
                            <p>Selamat datang di website ini. Berikut penjelasan dari algoritma dalam website ini.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="row">
                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Algoritma Serpent</h5>
                            <p>
                                Serpent adalah Algoritma Kriptografi yang bersifat block cipher symmetriccryptography
                                yang merupakan AES finalis pada kontes AES.
                                Algoritma Serpent adalah salah satu algoritma yang dapat digunakan untuk melakukan
                                enkripsi data
                                sehingga data asli hanya dapat dibaca oleh seseorang yang memiliki kunci enkripsi
                                tersebut.
                            </p>
                            <a href="Algoritma1.php"><button type="button" class="btn btn-primary">Hitung</button></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Algoritma ECC</h5>
                            <p>
                                Elliptic Curve Cryptography adalah cabang kriptografi kunci publik yang mengandalkan
                                sifat matematika kurva elips pada bidang berhingga.
                                Tidak seperti algoritma kunci publik tradisional seperti RSA dan DSA, ECC menawarkan
                                keamanan setara dengan panjang kunci yang jauh lebih pendek, sehingga komputasinya lebih
                                efisien.
                            </p>
                            <a href="Algoritma2.php"><button type="button" class="btn btn-success">Hitung</button></a>

                        </div>

                    </div>
                </div>
        </section>
        <!-- End Section -->

    </main><!-- End #main -->

    <?php include 'footer\footer.php'; ?>
</body>

</html>