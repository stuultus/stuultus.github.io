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
                <a class="nav-link" href="Algoritma1.php">
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
            <h1>Algoritma</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Beranda</a></li>
                    <li class="breadcrumb-item active">Algoritma Serpent</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->


        <section class="section">
            <div class="row">
                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Enkripsi</h5>
                            <form class="row g-3 needs-validation" novalidate>
                                <div class="col-12">
                                    <label for="Enkripsi" class="form-label">Plain Text</label>
                                    <input type="number" class="form-control" id="Enkripsi" required>
                                    <div class="invalid-feedback">
                                        Inputan harus 128 bit
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Hitung</button>
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                </div>
                                <div class="col-12">
                                    <label for="chiper" class="form-label">Chiper Text</label>
                                    <input type="number" class="form-control" id="chiper" disabled>
                                </div>
                                <div class="col-12">
                                    <label for="key" class="form-label">Key</label>
                                    <input type="number" class="form-control" id="key" disabled>
                                </div>
                            </form><!-- Vertical Form -->
                            <!-- End form Enkripsi -->
                        </div>
                    </div>
                </div>


                <!-- Form Dekripsi -->
                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Dekripsi</h5>
                            <form class="row g-3 needs-validation" novalidate>
                                <div class="col-12">
                                    <label for="chiper" class="form-label">Chiper Text</label>
                                    <input type="number" class="form-control" id="chiper" required>
                                </div>
                                <div class="col-12">
                                    <label for="key" class="form-label">Key</label>
                                    <input type="number" class="form-control" id="key" required>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Hitung</button>
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                </div>
                                <div class="col-12">
                                    <label for="Enkripsi" class="form-label">Plain Text</label>
                                    <input type="number" class="form-control" id="Enkripsi" disabled>
                                    <div class="invalid-feedback">
                                        Inputan harus 128 bit
                                    </div>
                                </div>
                            </form><!-- Vertical Form -->
                            <!-- End form Enkripsi -->
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- End form Dekripsi -->

    </main><!-- End #main -->

    <?php include 'footer\footer.php'; ?>
    <?php 
    echo exec("serpent-algorithm-main\serpent\test_serpent.py");
    ?>
</body>

</html>