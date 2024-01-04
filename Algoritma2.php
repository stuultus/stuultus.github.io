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
                <a class="nav-link collapsed " href="index.php">
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
                <a class="nav-link" href="Algoritma2.php">
                    <i class="bi bi-diagram-3"></i>
                    <span>Algoritma ECC</span>
                </a>
            </li><!-- End F.A.Q Page Nav -->

        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Algoritma</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Beranda</a></li>
                    <li class="breadcrumb-item active">Algoritma ECC </li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Enkripsi dan Dekripsi</h5>
                            <form class="row g-3 needs-validation" novalidate>
                                <div class="col-12">
                                    <label for="A" class="form-label">Bilangan A</label>
                                    <input type="number" class="form-control" id="A" required>
                                    <div class="invalid-feedback">
                                        Inputan harus angka
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="B" class="form-label">Bilangan B</label>
                                    <input type="number" class="form-control" id="B" required>
                                    <div class="invalid-feedback">
                                        Inputan harus angka
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="Prima" class="form-label">Bilangan Key</label>
                                    <input type="number" class="form-control" id="Prima" required>
                                    <div class="invalid-feedback">
                                        Inputan harus angka
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="Kurva1" class="form-label">Titik Kurva 1</label>
                                    <input type="number" class="form-control" id="Kurva1" required>
                                    <div class="invalid-feedback">
                                        Inputan harus angka
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="Kurva2" class="form-label">Titik Kurva 2</label>
                                    <input type="number" class="form-control" id="Kurva2" required>
                                    <div class="invalid-feedback">
                                        Inputan harus angka
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Hitung</button>
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                </div>
                                <div>
                                    <label for="hasil" class="col-sm-2 col-form-label">Hasil </label>
                                    <div class="col-sm-12">
                                        <textarea class="form-control" style="height: 300px;"></textarea>
                                    </div>
                                </div>
                            </form><!-- Vertical Form -->
                            <!-- End form Enkripsi -->
                        </div>
                    </div>
                </div>
    </main><!-- End #main -->

    <?php include 'footer\footer.php'; ?>
    echo exec
</body>

</html>